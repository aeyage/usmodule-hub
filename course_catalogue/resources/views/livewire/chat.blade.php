<div>

<style>
    body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-image: var(--body-bg);
  font-family: Helvetica, sans-serif;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

nav {
    background-color: #227393;
    color: #fff;
    padding: 2.5rem;
    text-align: center;
    border-radius: 6px 6px 0 0;
}

nav>h1 {
    font-size: 2.5rem;
}

nav>p {
    margin-top: .5rem;
    font-size: 1.4rem;
    color: #e2e4e6;
}

.chat {
    font-size: 1.6rem;
    background-color: #fff;
    padding: 5rem 2rem;
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    max-height: 439px;
    overflow: hidden;
}

.chat::-webkit-scrollbar {
    width: 0 !important;
}

.chat {
    -ms-overflow-style: none;
    scrollbar-width: none;
}

.chat:hover {
    overflow: hidden;
    overflow-y: scroll;
}
@media (max-width: 400px) {
    .chat {
        overflow: auto;
        -webkit-overflow-scrolling: touch;
    }
}


.santaSays {
    display: flex;
    align-items: end;
    gap: 1.3rem;
    font-size: 13px
}

.text-box-santa>.text>p {
    background-color: #eff3f6;
    padding: 1.3rem;
    /* width: fit-content; */
    /* max-width: 250px; */
    border-radius: 1px;
}

.text-box-santa>.text>p:not(.text-box-santa>.text>p:nth-of-type(1)) {
    margin-top: 1.5rem;
}

.userSays {
    margin-top: 3rem;
    font-size: 13px;
}

.userSays>.text {
    display: flex;
    flex-direction: column;
    align-items: end;
}

.userSays>.text>p {
    background-color: #dff4fc;
    padding: 1.3rem;
    width: fit-content;
    max-width: 250px;
    border-radius: 1px;
}

.userSays>.text>p:not(.userSays>.text>p:nth-of-type(1)) {
    margin-top: 1.5rem;
}

hr {
    border: none;
    border-top: 1px solid #f0efefe7;
}

.message-box {
    padding-top: 1rem;
    background-color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem 2rem;
    border-radius: 0 0 6px 6px;
}

.message-input {
    width: 100%;
}

#inputText {
    border: none;
    padding: 1rem 0;
    font-family: 'Poppins', sans-serif;
    width: 100%;
    font-size: 1.6rem;
    outline: none;
}

.plane {
    font-size: 2rem;
    color: #227393;
    cursor: pointer;
}

.userMessage {
    background-color: #dff4fc;
    padding: 1.3rem;
    width: fit-content;
    max-width: 250px;
    border-radius: 1px;
    margin-left: auto;
    word-wrap: break-word;
}

.santaMessage {
    background-color: #eff3f6;
    padding: 1.3rem;
    width: fit-content;
    border-radius: 1px;
    word-wrap: break-word;
}
</style>


    <div class="container"  style="width: 100%">
        <nav>
            <h1> Chatbot</h1>

        </nav>
        <div class="chat" style="width: 100%">
            <div class="santaSays">
                <div class="img-box">
                    <img width="80" style="border-radius: 25px" src="https://img.freepik.com/free-vector/funny-santa-claus-celebrating-christmas_74855-962.jpg" alt="santaimg">
                </div>
                <div class="text-box-santa">
                    <div class="text">
                        <p>Hi there!</p>
                        <p>How may I be of assistance?</p>
                    </div>
                </div>
            </div>
            <div class="userSays">
                <div class="text">
                    <p>Hello,</p>
                    <p>Hi?</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="message-box">
            <div class="message-input">
                <input id="inputText" type="text" placeholder="What can I help you with?">
            </div>
            <div class="send-btn">
                <i class="fa-solid fa-paper-plane plane"></i>
            </div>
        </div>
    </div>
</div>
<script>

const chat = document.querySelector(".chat");
const inputText = document.getElementById("inputText");
const btn = document.querySelector(".plane");

const santaPhrases = [
    "How may I assist you?",
    "I am still in development stage."
]

btn.addEventListener("click", () => {
    let random = Math.floor(Math.random() * santaPhrases.length);
    let santaSays = santaPhrases[random];

    let pU = document.createElement("p");
    pU.innerHTML = inputText.value;
    pU.classList.add("userMessage");
    chat.appendChild(pU);
    inputText.value = "";
    chat.scrollTop = chat.scrollHeight;

    let typing = document.createElement("p");
    typing.innerHTML = "User is typing...";
    typing.style.fontSize = "1.3rem";
    chat.appendChild(typing);
    setTimeout(() => {
        let pS = document.createElement("p");
        pS.innerHTML = santaSays;
        pS.classList.add("santaMessage");
        chat.appendChild(pS);
        chat.scrollTop = chat.scrollHeight;
        chat.removeChild(typing);
    }, 2000);
})



inputText.addEventListener("keyup", (e) => {
    if (e.key === "Enter") {
        let random = Math.floor(Math.random() * santaPhrases.length);
        let santaSays = santaPhrases[random];

        let pU = document.createElement("p");
        pU.innerHTML = inputText.value;
        pU.classList.add("userMessage");
        chat.appendChild(pU);
        inputText.value = "";
        chat.scrollTop = chat.scrollHeight;

        let typing = document.createElement("p");
        typing.innerHTML = "Bot is typing...";
        typing.style.fontSize = "1.3rem";
        chat.appendChild(typing);
        setTimeout(() => {
            let pS = document.createElement("p");
            pS.innerHTML = santaSays;
            pS.classList.add("santaMessage");
            chat.appendChild(pS);
            chat.scrollTop = chat.scrollHeight;
            chat.removeChild(typing);
        }, 2000);
    }
})
</script>
