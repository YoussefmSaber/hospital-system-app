const nav = document.getElementById('header');
const home = document.getElementById('home');

document.addEventListener('scroll', () => {
    if (home.offsetTop <= window.pageYOffset) {
        nav.classList.remove('nav__invisible');
        nav.classList.add('nav__visible');
    }
    else if (window.pageYOffset > nav.clientHeight) nav.classList.add('nav__invisible');
    else {
        nav.classList.remove('nav__invisible');
        nav.classList.remove('nav__visible');
    };
});
const addStudent = () => {
const table = document.getElementById('tbl');
let row = table.insertRow();
let cell1 = row.insertCell();
let cell2 = row.insertCell();
let cell3 = row.insertCell();
let cell4 = row.insertCell();
let cell5 = row.insertCell();
cell1.innerHTML ;
cell2.innerHTML ;
cell3.innerHTML ;
cell4.innerHTML = `<input type="radio" name="approve" id="approve"><label for="approve">approve</label> 
                        <input type="radio" name="disapprove" id="disapprove"><label for="disapprove">disapprove</label>`;
}