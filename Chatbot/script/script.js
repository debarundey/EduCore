// DOM Elements
const container = document.querySelector(".container");
const promptForm = document.querySelector(".prompt-form");
const chatContainer = document.querySelector(".chats-container");
const promptInput = promptForm.querySelector(".prompt-input");
const fileInput = promptForm.querySelector("#file-input");
const fileUploadwrapper = promptForm.querySelector(".file-upload-wrapper")
const themeToggleBtn = document.querySelector("#theme-toggle-btn");

// API Configuration
const API_KEY = "YOUR_API_KEY";
const API_URL = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=${API_KEY}`;

// Global Variables
let typingInterval, controller;
const chatHistory = [];
const userData = {
    message: "",
    file: {},
};

// ------ Utility Functions ------

// Create and return a formatted message div
const createMessageElement = (content, ...classes) => {
    const div = document.createElement("div");
    div.classList.add("message", ...classes);
    div.innerHTML = content;
    return div;
};

// Smooth scroll to the bottom of the container
const scrollToBottom = () => {
    container.scrollTo({ top: container.scrollHeight, behavior: "smooth" });
};

// Simulate typing effect word-by-word
const applyTypingEffect = (text, textElement, botMessageDiv) => {
    textElement.textContent = "";
    const words = text.split(" ");
    let wordIndex = 0;

    typingInterval = setInterval(() => {
        if (wordIndex < words.length) {
            textElement.textContent +=
                (wordIndex > 0 ? " " : "") + words[wordIndex++];
            scrollToBottom();
        } else {
            clearInterval(typingInterval);
            botMessageDiv.classList.remove("loading");
            document.body.classList.remove("bot-responding");
        }
    }, 40);
};

// ------ API Interaction ------

// Send user prompt and get AI response
const fetchBotResponse = async (botMessageDiv) => {
    const textElement = botMessageDiv.querySelector(".message-text");
    controller = new AbortController(); 

    // Push user input to chat history
    chatHistory.push({
        role: "user",
        parts: [
            { text: userData.message },
            ...(userData.file.data
                ? [
                    {
                        inline_data: (({fileName, isImage, ...rest }) => rest)( 
                            userData.file
                        ),
                    },
                ]
                : []),
        ],
    });

    try {
        const response = await fetch(API_URL, {
            method: "POST",
            headers: {"Content-Type": "application/json"},
            body: JSON.stringify({contents: chatHistory}),
            signal: controller.signal,
        });

        const data = await response.json();
        if (!response.ok) throw new Error(data.error.message);

        // Extract response and simulate typing
        const responseText = data.candidates[0].content.parts[0].text
        .replace(/\*\*([^]+)\*\*/g, "$1")
        .trim();

        applyTypingEffect(responseText, textElement, botMessageDiv);

        chatHistory.push({role: "model", parts: [{text: responseText }] });
    } catch (error) {
        textElement.style.color = "#d62939";
        textElement.textContent = controller.signal.aborted
            ? "Response generation stopped."  
            :error.message;
        botMessageDiv.classList.remove("loading");
        document.body.classList.remove("bot-responding");  
    } finally {
        userData.file = {};
    }
};

// ------ Event Handlers ------

// On form submit - handle user input and trigger bot response
const handlePromptSubmit = (e) => {
    e.preventDefault();
    const message = promptInput.value.trim();

    if (!message || document.body.classList.contains("bot-responding")) return;

    // Reset input and UI states
    promptInput.value = "";
    userData.message = message;
    document.body.classList.add("bot-responding", "chats-active");
    fileUploadwrapper.classList.remove("active", "img-attached", "file-attached");

    // Create and append user message
     const attachmentHTML = userData.file.data
         ? userData.file.isImage
             ? `<img src="data:${userData.file.mime_type};base64,${userData.file.data}" class="img-attachment"/>`
             : `<p class="file-attachment"><span class="material-symbols-rounded">description</span>${userData.file.fileName}</p>`
         : "";

    const userMessageDiv = createMessageElement(
        `<p class="message-text">${message}</p>${attachmentHTML}`,
        "user-message"
    );

    chatContainer.appendChild(userMessageDiv);
    scrollToBottom();

    // Append loading bot message and fetch response
    setTimeout(() => {
        const botMessageDiv = createMessageElement(
            '<img src="images/logo.png" alt="" class="avatar"><p class="message-text">Thinking...</p>',
            "bot-message",
            "loading"
        );
        chatContainer.appendChild(botMessageDiv);
        scrollToBottom();
        fetchBotResponse(botMessageDiv);
    }, 600);
};

// On file selected
const handleFileChange = () => {
    const file = fileInput.files[0];
    if(!file) return;

    const isImage = file.type.startsWith("image/");
    const reader = new FileReader();

    reader.onload = (e) => {
        const base64String = e.target.result.split(",")[1];
        fileInput.value = ""; // reset for next selection
        fileUploadwrapper.querySelector(".file-preview").src = e.target.result;
        fileUploadwrapper.classList.add(
            "active",
            isImage ? "img-attached" : "file-attached"
        );

        // Store file in userData
        userData.file = {
            fileName: file.name,
            data: base64String,
            mime_type: file.type,
            isImage,
        };
    };

    reader.readAsDataURL(file);
};

// Cancel file upload
const cancelFileUpload = () => {
    userData.file = {};
    fileUploadwrapper.classList.remove("active", "img-attached", "file-attached");
};

// Abort bot typing
const stopBotResponse = () => {
    userData.file = {};
    controller?.abort();
    clearInterval(typingInterval);
    chatContainer
        .querySelector(".bot-message.loading")
        ?.classList.remove("loading");
    document.body.classList.remove("bot-responding");
};

// Clear entire chat
const deleteAllChats = () => {
    chatHistory.length = 0;
    chatContainer.innerHTML = "";
    document.body.classList.remove("bot-responding", "chats-active");
};

// Handle suggestion click
const applySuggestion = (e) => {
    const text = e.currentTarget.querySelector(".text").textContent;
    promptInput.value = text;
    promptForm.dispatchEvent(new Event("submit"));
};

// Show/hide UI controls (mobile behavior)
const toggleMobileControls = ({ target }) => {
    const wrapper = document.querySelector(".prompt-wrapper");
    const isControl = 
    target.classList.contains("prompt-input") ||
    (wrapper.classList.contains("hide-controls") &&
        (target.id === "add-file-btn" || target.id === "stop-response-btn"));

    wrapper.classList.toggle("hide-controls", isControl);
};

// Toggle between light and dark theme
const toggleTheme = () => {
    const isLight = document.body.classList.toggle("light-theme");
    localStorage.setItem("themeColor", isLight ? "light_mode" : "dark_mode");
    themeToggleBtn.textContent = isLight ? "dark_mode" : "light_mode";
};

// Load theme from local storage
const initializeTheme = () => {
    const isLight = localStorage.getItem("themeColor") === "light_mode";
    document.body.classList.toggle("light-theme", isLight);
    themeToggleBtn.textContent = isLight ? "dark_mode" : "light_mode";
}

// ------ Event Bindings ------
promptForm.addEventListener("submit", handlePromptSubmit);
fileInput.addEventListener("change", handleFileChange);
promptForm
    .querySelector("#add-file-btn")
    .addEventListener("click", () => fileInput.click());
document
    .querySelector("#cancel-file-btn")
    .addEventListener("click", cancelFileUpload);
document
    .querySelector("#stop-response-btn")
    .addEventListener("click", stopBotResponse);
document
    .querySelector("#delete-chats-btn")
    .addEventListener("click", deleteAllChats);
document
    .querySelectorAll(".suggestions-item")
    .forEach((item) => item.addEventListener("click", applySuggestion));
document.addEventListener("click", toggleMobileControls);
themeToggleBtn.addEventListener("click", toggleTheme);

// Init theme on load
initializeTheme();