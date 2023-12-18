const filter = document.getElementById("filter");
const items = document.querySelectorAll("body");

filter.addEventListener('input',(e) => filterData(e.target.value));
function filterData(search){
    items.forEach((item)=>{
        if(item.innerText.toLowerCase().includes(searc.toLowerCase())){
            item.classList.remove('d-none')
        }else{
            item.classList.add('d-none');
        }
    });
}