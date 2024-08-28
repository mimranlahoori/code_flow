function dateDisplay() {
   let btnElement = document.getElementById('btn');
   
   let text = btnElement.innerHTML;

   // Check if the text is in lowercase
   if (text == text.toLowerCase()) {
       // If text is in lowercase, convert to uppercase
    //    alert(text.toUpperCase());
    } else {
        // Otherwise, convert text to lowercase
        alert(text.toLowerCase());
        let pro = prompt('Enter You Name')
        alert(`Hello ${pro}, Welcome to our Website!`)
   }
   
   // Confirmation box to confirm the change
   let x = confirm("Are You Sure")
   if (x == true) {
       btnElement.innerHTML = 'Hello World!';
       dateDisplay();
   } 
}




// let math = Math.random()*999999999
// let random = Math.floor(math)

let min = Math.min(0,5,8,6,1,5,7,9,6)
let max = Math.max(0,5,8,6,1,5,7,9,6)
let round = Math.round(4.3)

// document.write(random)
document.write(min)
document.write(max)
document.write(round)