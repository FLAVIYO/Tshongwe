const numberButtons = document.querySelectorAll(['data-numbe']);
const operationButtons = document.querySelectorAll('[data-operation]');
const egualButton = document.querySelector('[data-equal]');
const deleteButton = document.querySelector('[data-delete]');
const clearlButton = document.querySelector('[data-all-clear]');
const prevTextElement = document.querySelector('[data-prev-operand]');
const currentTextElement = document.querySelector('[data-current-operand]');


class Calculator {

    constructor(prevTextElement, currentTextElement) {
        this.prevTextElement = prevTextElement
        this.currentTextElement = currentTextElement
        this.clear()
    }


    clear() {
        this.prevoperand = ''
        this.currentoperand = ''
        this.operations = undefined

    }

    remove() {
        this.currentoperand = this.currentoperand.toString().slice(0, -1)
    }

    appendNumber(Number) {
        if (number == '.' && this.currentTextElement.inclides('.')) return
        this.currentTextElement = this.currentTextElement.toString() + number.toString()

    }

    ChooseOperation(operations) {
        if (this.currentoperand == '') return

        if (this.prevoperand !== '') {
            this.compute
        }
        this.operations = operations
        this.prevoperand = this.currentoperand
        this.currentoperand = ''

    }

    compute() {

        let computation;
        const prev = parseFloat(this.prevoperand);
        const current = parseFloat(this.currentoperand);
        if (isNaN(prev) || isNaN(current)) return

        switch (this.operations) {
            case '+':
                computation = prev + current
                break
            case '-':
                computation = prev - current
                break
            case '÷':
                computation = prev / current
                break
            case '*':
                computation = prev * current
                break
            default:
                return
        };
        this.currentoperand = computation;
        this.operations = undefined;
        this.prevoperand = '';
    };

    updateDisplay() {
        this.currentTextElement.innerText = this.getDisplay(this.currentoperand)
        if(this.operations != null){
            this.prevTextElement.innerText = `${this.getDisplay(this.prevoperand)} ${this.operations}`
        } else{
            this.prevTextElement.innerText =''
        }
    };
    getDisplay(number){
        const strnumber = number.toString()
        const inttDigit = parseFloat(strnumber.split('.')[0])
        const decDigit = strnumber.split('.')[1]
        let intDisplay 
        if(isNaN(inttDigit)){
            intDisplay = ''
        } else{
            intDisplay = inttDigit.toLocaleString('en', {maximumFractionDigits: 0})
        }
        if(decDigit != null){
            return `${intDisplay}.${deDigit}`
        } else{
            return intDisplay
        }

    }
    getDisplay(number){
        const floatNumber = parseFloat(number)
        if(isNaN(floatNumber)) return ''
        return floatNumber.toLocaleString('en')
    }

    getDisplay(number){
        
        if(decDigit != null){
            return `${intDisplay}.${deDigit}`
        } else{
            return intDisplay
        }
    }
};

const calculator = new Calculator (prevTextElement, currentTextElement);

numberButtons.forEach(button => {
    button.addEventListener('click', () => {
        calculator.appendNumber(button.innerText)
        calculator.updateDisplay()
    })
});

operationButtons.forEach(button => {
    button.addEventListener('click', () => {
        calculator.ChooseOperation(button.innerText)
        calculator.updateDisplay()
    })
});

egualButton.addEventListener('click', button => {
    calculator.compute()
    calculator.updateDisplay()
});
clearlButton.addEventListener('click', button => {
    calculator.clear()
    calculator.updateDisplay()
});
deleteButton.addEventListener('click', button => {
    calculator.clear()
    calculator.updateDisplay()
});
