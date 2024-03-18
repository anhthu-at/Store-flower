// window.addEventListener("load", 
//     function(){setTimeout(open)}
// )

// document.querySelector("#close").addEventListener("click", 
//     function(){
//         document.querySelector(".popup").style.display = "none";
// })

// let username ;
// document.getElementById("btn-submit-name").onclick =
// function(){
//     username = document.getElementById("input-hello-user").value;
//     document.getElementById("title-login-user-change").innerHTML= `<h2> Welcome ${username}</h2>`
//     document.querySelector(".popup").style.display = "none";
// }

// Arrow function
// hiện thông báo hello user
window.addEventListener("load", () => { setTimeout(open) }
)
function open(event) {
    document.querySelector(".popup").style.display = "block";
}
// bắt sự kiện đóng hello user
document.querySelector("#close").addEventListener("click",
    () => {
        document.querySelector(".popup").style.display = "none";
    })
document.querySelector(".btn-news-feed").addEventListener("click",
    () => {
        alert("hello")
    })

document.querySelector(".icon-cb").addEventListener('click',
    () => {
        doubleClick()
    }
)
// Mo Dang Nhap
document.querySelector("#show-login").addEventListener('click',
    () => {
        document.querySelector(".lg-popup").classList.add("active")
    }
)
// Dong Dang Nhap
document.querySelector(".lg-popup .close-btn").addEventListener('click',
    () => {
        document.querySelector(".lg-popup").classList.remove("active")
    }
)
// Chuyen qua Dang ky
document.querySelector("#show-rg").addEventListener('click',
    () => {
        document.querySelector(".lg-popup").classList.remove("active")
        document.querySelector(".rg-popup").classList.add("active")
        document.querySelector(".rg-popup").classList.add("z-rg-popup")
    }
)
// Dong Dang ky
document.querySelector("#rg-exit").addEventListener('click',
    () => {
        document.querySelector(".rg-popup").classList.remove("active")
        document.querySelector(".rg-popup").classList.remove("z-rg-popup")
    }
)
// KHI CLICK DANG KI LOP HOC
document.querySelector("#btn-rg-class").addEventListener('click',
    () => {
        document.querySelector(".lg-popup").classList.add("active")
    }
)

function doubleClick(e) {

    let menu = document.querySelector(".chatbot-container")
    switch (menu.style.display) {
        case menu.style.display = "block":
            menu.style.display = "none"
            break

        case menu.style.display = "none":
            menu.style.display = "block"
            break
    }
}

// // CHATBOT
var sendBtn = document.getElementById('sendBtn')
var textBox = document.getElementById('textbox')
var chatContainer = document.getElementById('cb-container')

// var user = { message: "", counter: 0}
var user = { message: "" }
// var httpRequest;

// // chatbotSendMessage("Please choice an option: ")


// // cau hoi dung trl moi hoi tiep

var arrayOfPossibleMessages = [
    {
        "message": "thông tin về các khóa học của bạn?", "response": "Ở WorkShop chúng tôi có 3 lớp học thường xuyên và 2 lớp học mới học cắm hoa giỏ, học cắm lãng hoa, học bó hoa cưới cầm tay " +
            "học cắm mâm quả hiện đại, cắm mâm quả truyền thống"
    },
    { "message": "tháng này có những lớp học nào?", "response": "Lớp học thường diễn ra vào cuối tuần.Đặc biệt vào những dịp lễ lớp học sẽ được đóng" },
    {
        "message": "ưu đãi tháng này như thế nào?",
        "response": "vào những tháng có dịp lễ tất cả lớp học đều được giảm 10% học phí"
    },
    { "message": "cách thức đăng kí như thế nào?", "response": "Bạn có thể đăng ký ở mục đăng ký của chúng tôi" },
    { "message": "thời gian lớp học bắt đầu?", "response": "Vào cuối tuần chúng tôi có 2 lớp học buổi sáng và buổi chiều. Anh/chị có thể tự sắp xếp" },
    {
        "message": "học phí bao nhiêu?", "response": " Với khóa học cắm hoa giỏ: 500.000đ" + "<br>" +
            "Với khóa học cắm lãng hoa: 800.000đ" + "<br>" +
            "Với khóa học bó hoa cưới cầm tay: 400.000đ" + "<br>" +
            "Với khóa học cắm hoa trái cây: 1.000.000đ" + "<br>" +
            "Với khóa học cắm mâm quả hiện đại: 1.500.000đ" + "<br>" +
            "Với khóa học cắm mâm quả truyền thống: 1.500.000đ"
    },
    { "message": "bạn đăng ký lớp học nào?", "response": "" },


]

// // cau hoi chay tu dong
// var questionsToAsk = [
//     {"question":"how are you", "answer":"great"},
//     {"question":"who are you?", "answer":"hi!"},
//     {"question":"what your name?", "answer":"I'm student"},
//     {"question":"how old are you?", "answer":"THU"},
//     {"question":"how old are you?", "answer":"18"},
// ]

// // askQuestion();

// function askQuestion(){
//     if(questionsToAsk.length > user.counter) {
//         setTimeout(function() {
//             chatbotSendMessage(questionsToAsk[user.counter].question)
//             user.counter++
//         },1000)
//     }



// }

setTimeout(function () {
    chatbotSendMessage("Chào mừng bạn đến với WorkShop. Chúng tôi có thể giúp gì cho?")
}, 1000)

function chatbotSendMessage(messageText) {
    var messageElement = document.createElement('div')
    messageElement.classList.add('w-50')
    messageElement.classList.add('float-left')
    messageElement.classList.add('shadow-sm')
    messageElement.style.margin = "10px"
    messageElement.style.padding = "5px"

    messageElement.innerHTML = "<span>Chat: </span>" +
        "<span>" + messageText + "</span>"

    messageElement.animate([{
        easing: "ease-in",
        opacity: 0.4
    },
    { opacity: 1 }],
        { duration: 500 }
    )

    chatContainer.appendChild(messageElement)
    //     // scroll message
    chatContainer.scrollTop = chatContainer.scrollHeight
}

function sendMessage(messageText) {
    var messageElement = document.createElement('div')
    messageElement.classList.add('w-70')
    messageElement.classList.add('float-right')
    messageElement.classList.add('shadow-sm')
    messageElement.style.margin = "10px"
    messageElement.style.padding = "5px"

    messageElement.innerHTML = "<span>You: </span>" +
        "<span>" + messageText + "</span>"
    //     messageElement.animate([{
    //         easing: "ease-in",
    //         opacity: 0.4
    //     },
    //     { opacity: 1 }],
    //         { duration: 500 }
    //     )

    chatContainer.appendChild(messageElement)
    //     // scroll message
    //     chatContainer.scrollTop = chatContainer.scrollHeight
}


// function assistanResponse(messageText) {
//     let userChoice = parseInt(messageText.trim())

//     switch(userChoice) {
//         case 1:
//             chatbotSendMessage("Ban chon lop hoc so 1")
//             break
//         case 2:
//             chatbotSendMessage("Ban chon lop hoc so 2")
//             break
//         case 3:
//             chatbotSendMessage("Ban chon lop hoc so 3")
//             break
//         case 4:
//             chatbotSendMessage("Ban chon lop hoc so 4")
//             break
//         case 5:
//             chatbotSendMessage("Ban chon lop hoc so 5")
//             break

//         default:
//             chatbotSendMessage("Vui long chon lai")
//     }

// }

sendBtn.addEventListener('click', function (e) {

    if (textBox.value == "") {
        alert("Please type in message")
    } else {
        let messageText = textBox.value;
        user.message = messageText
        sendMessage(messageText)
        textBox.value = ""

        //         // questionsToAsk[user.counter-1].answer = user.message

        //         // askQuestion()
        processMessage()

        //         // assistanResponse(messageText)


    }

})

function processMessage() {
    if (user.message.length > 5) {
        var result = arrayOfPossibleMessages.filter(val => val.message.includes(user.message.toLowerCase()))

        if (result.length > 0) {
            var responses = result[0].response

            if (user.message == "bạn đăng ký lớp học nào?") {
                initializeOptions()
            } else {
                setTimeout(function () {
                    chatbotSendMessage(responses)
                }, 1000)
            }

        } else {
            setTimeout(function () {
                chatbotSendMessage("I don't understand")
            }, 1000)
        }
    } else if (user.message == "how" || user.message == "who") {

        setTimeout(function () {
            chatbotSendMessage("?")
        }, 1000)
    }
    else {
        setTimeout(function () {
            chatbotSendMessage("Please send me a complete sentence")
        }, 1000)

    }

}

function initializeOptions() {
    let option = [
        { number: 1, choice: "Cam hoa gio" },
        { number: 2, choice: "Bo hoa cuoi" },
        { number: 3, choice: "Cam lang hoa" },
        { number: 4, choice: "Cam mam qua hien dai" },
        { number: 5, choice: "Cam mam qua truyen thong" },
    ]
    var messageElement = document.createElement('div')
    messageElement.classList.add('w-50')
    messageElement.classList.add('float-left')
    messageElement.classList.add('shadow-sm')
    messageElement.style.margin = "10px"
    messageElement.style.padding = "5px"

    for (let i = 0; i < option.length; i++) {
        messageElement.innerHTML += "<br>" +
            "<span>" + option[i].number + " - " + option[i].choice + "</span>"
    }

    messageElement.animate([{
        easing: "ease-in",
        opacity: 0.4
    },
    { opacity: 1 }],
        { duration: 500 }
    )

    chatContainer.appendChild(messageElement)
}

// KET NOI CSDL VOI FIREBASE

var userLogin = document.getElementById("lg-email");
var passLogin = document.getElementById("lg-password");
var userRegister = document.getElementById("rg-number");
var passRegister = document.getElementById("rg-password");
var registerSubmit = document.getElementById("registerSubmit");
var loginSumit = document.getElementById("loginSumit");
var passRegister2 = document.getElementById("rg-password2");
var checkBox = document.getElementsByName("gender");

