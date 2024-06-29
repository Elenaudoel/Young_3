let currret_question_index = 0

document.addEventListener('DOMContentLoaded',get_questions)
document.addEventListener('click', clicado)

function get_questions()
{
    const QUESTIONS_CARD = document.getElementById("questions-card")
    const QUESTIONS_ELEMENT = document.querySelector('question')
    const OPTIONS = document.querySelectorAll('input[type=radio]')
    const OPTIONS_LABELS = document.querySelectorAll('label')
    const BUTTON = document.getElementById('submit')
    const RESULT_DIV = document.getElementById('result')
    let questions = []

    fetch("get_questions.php")
    .then(response => response.json())
    .then(data =>{
        questions = data
        show_questions()
    })
}

function show_questions()
{
     if(currret_question_index < questions.length)
    {
        const QUESTION = questions[currret_question_index]
        QUESTIONS_ELEMENT.textContent = QUESTION.question
        OPTIONS_LABELS[0].textContent = QUESTION.option1
        OPTIONS_LABELS[1].textContent = QUESTION.option2
        OPTIONS_LABELS[3].textContent = QUESTION.option3
        OPTIONS_LABELS[4].textContent = QUESTION.option4
    }
    else{
        show_result()
    }
}

function clicado(){
    const SELECT_OPTION = document.querySelector('input[name=opiton]:checked')
    if(SELECT_OPTION)
    {
        const ANSWER = SELECT_OPTION.nextElementSibling.textContent
        currret_question_index++
        show_questions()
    }
    else
    {
        alert('Selecione uma opção antes de enviar')
    }
}