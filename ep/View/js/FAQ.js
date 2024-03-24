const ulDOM = document.querySelector(".faq-list-questions");

const LIST_QUESTION = [
  {
    question: "Làm thế nòa để chúng tôi có thể đăng ký thành viên mới?",
    answer:
      "Các bạn có thể đăng ký thành viên tại chính trang web bằng cách vào trang đăng nhập, điền đầy đủ các thông tin rồi gửi đi. Hoặc các bạn có thể liên hệ đến 1900 9999 để đăng ký với chúng tôi!",
  },
  {
    question: "Giúp tôi đặt một PT cho việc tập 6 múi đê",
    answer: "OK bạn nhé",
  },
  {
    question: "Làm thế nòa để chúng tôi có thể đăng ký thành viên mới?",
    answer:
      "Các bạn có thể đăng ký thành viên tại chính trang web bằng cách vào trang đăng nhập, điền đầy đủ các thông tin rồi gửi đi. Hoặc các bạn có thể liên hệ đến 1900 9999 để đăng ký với chúng tôi!",
  },
  {
    question: "Làm thế nòa để chúng tôi có thể đăng ký thành viên mới?",
    answer:
      "Các bạn có thể đăng ký thành viên tại chính trang web bằng cách vào trang đăng nhập, điền đầy đủ các thông tin rồi gửi đi. Hoặc các bạn có thể liên hệ đến 1900 9999 để đăng ký với chúng tôi!",
  },
  {
    question: "Làm thế nòa để chúng tôi có thể đăng ký thành viên mới?",
    answer:
      "Các bạn có thể đăng ký thành viên tại chính trang web bằng cách vào trang đăng nhập, điền đầy đủ các thông tin rồi gửi đi. Hoặc các bạn có thể liên hệ đến 1900 9999 để đăng ký với chúng tôi!",
  },
];

let index = 0;

const interval = setInterval(() => {
  if (index < LIST_QUESTION.length) {
    const questionWrapper = document.createElement("div");
    questionWrapper.className = "faq-question-wrapper";
    const questionItem = document.createElement("li");
    const answerItem = document.createElement("p");

    questionWrapper.className = "faq-question-wrapper";
    answerItem.className = "faq-answer";
    answerItem.innerText = LIST_QUESTION[index].answer;
    questionItem.className = "faq-question";
    questionItem.innerHTML = `${LIST_QUESTION[index].question}
    <i class="fa-solid fa-angle-right faq-arrow-right" style="color: #ffffff;"></i>`;
    questionItem.addEventListener("click", () => {
      if (questionWrapper.querySelector(".faq-answer")) {
        questionItem.className = "faq-question";
        questionWrapper.removeChild(answerItem);
      } else {
        questionItem.className += " chosen";
        questionWrapper.appendChild(answerItem);
      }
    });

    questionWrapper.appendChild(questionItem);

    ulDOM.appendChild(questionWrapper);
    index++;
  } else {
    clearInterval(interval);
  }
}, 500);
