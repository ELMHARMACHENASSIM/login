
let getFile = document.querySelector("#profileimg");
let uplodedimg = "";
let showImg = document.querySelector("#displayimg");
let displayImage = document.querySelector("#displayi")
getFile.addEventListener("change", function(){
   const reader = new FileReader();
   reader.addEventListener('load',()=>{
    uplodedimg = reader.result;
    showImg.src = uplodedimg;
   });
   reader.readAsDataURL(this.files[0]);
})

let btnSubmit = document.querySelector('#submitlogin');