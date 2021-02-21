document.addEventListener('DOMContentLoaded', () => {
    Contact.ShowAndCloseINFO();
    Contact.hideTextInput();
    Contact.RequestData();
});
class Contact {
    static ShowAndCloseINFO() {
        var sectionInfo = document.querySelector('.infoSectionContact'),
            x = sectionInfo.querySelector('.block .closeBlock img'),
            button=document.querySelector('.Callback'),
            section=document.querySelector('.infoSectionContact .block form'),
            TextName=section.querySelector('.labName'),
            TextSurname=section.querySelector('.labsurName'),
            TextNumber=section.querySelector('.labNum'),
            TextComment=section.querySelector('.labComment');
        if(button){
            button.addEventListener('click',()=>{
                if (sectionInfo) {
                    document.body.style.overflow = 'hidden';
                    sectionInfo.style.display = 'block';
                    sectionInfo.style.overflow = 'auto';
                }
            });
        }

        if (x) {
            x.addEventListener('click', () => {
                TextComment.style.display='block';
                TextNumber.style.display='block';
                TextSurname.style.display='block';
                TextName.style.display='block';
                document.body.style.overflow = 'scroll';
                sectionInfo.style.overflow = 'hidden';
                sectionInfo.style.display = 'none';
            });
        }
    }
    static hideTextInput(){
        var section=document.querySelector('.infoSectionContact .block form'),
            TextName=section.querySelector('.labName'),
            TextSurname=section.querySelector('.labsurName'),
            TextNumber=section.querySelector('.labNum'),
            TextComment=section.querySelector('.labComment'),
            TextEmail=section.querySelector('.labEmail'),
            inputName=section.querySelector('input[name="name"]'),
            inputSurname=section.querySelector('input[name="surname"]'),
            inputNumber=section.querySelector('input[name="number"]'),
            inputComment=section.querySelector('textarea[name="comment"]'),
            inputEmail=section.querySelector('input[name="email"]');
            inputName.value='';
            inputSurname.value='';
            inputNumber.value='';
            inputComment.value= '';

        function Closetext(input,text){
            text.addEventListener('click',()=>{
                text.style.display='none';
                var next=text.nextSibling,
                    next2=next.nextSibling;
                next2.checked=true;
                console.log(next2);
            });
            input.addEventListener('click',()=>{
               text.style.display='none';
            });
            input.onblur=function (){
                if(input.value === ""){
                    text.style.display='block';
                }
            };
        }
        Closetext(inputName,TextName);
        Closetext(inputSurname,TextSurname);
        Closetext(inputNumber,TextNumber);
        Closetext(inputComment,TextComment);
        Closetext(inputEmail,TextEmail);
    }
    static RequestData(){
        var section=document.querySelector('.infoSectionContact .block form'),
         inputName=section.querySelector('input[name="name"]'),
            inputSurname=section.querySelector('input[name="surname"]'),
            inputNumber=section.querySelector('input[name="number"]'),
            inputComment=section.querySelector('textarea[name="comment"]'),
            inputEmail=section.querySelector('input[name="email"]'),
            button=section.querySelector('button');
        if(button){
            inputNumber.addEventListener('keyup', function(){
                this.value = this.value.replace(/[a-zа-яё]/gi, '');
            });
            button.addEventListener('click',()=>{

                if(inputEmail.value !== ''){
                    inputEmail.style.border='none';
                    console.log(inputEmail.value);
                }else  if(inputEmail.value === ''){
                    inputEmail.style.border='red 1px solid';
                }

                if(inputName.value !== ''){
                    inputName.style.border='none';
                    console.log(inputName.value);
                }else  if(inputName.value === ''){
                    inputName.style.border='red 1px solid';
                }

                if(inputSurname.value !== ''){
                    inputSurname.style.border='none';
                    console.log(inputSurname.value);

                }else if(inputSurname.value === ''){
                    inputSurname.style.border='red 1px solid';
                }

                if(inputNumber.value !== ''){
                    inputNumber.style.border='none';
                    console.log(inputNumber.value);

                }else if(inputNumber.value === ''){
                    inputNumber.style.border='red 1px solid';
                }

                if(inputComment.value !== ''){
                    inputComment.style.border='none';
                    console.log(inputComment.value);

                }else if(inputComment.value === ''){
                    inputComment.style.border='red 1px solid';
                }
            });
        }
    }
}
