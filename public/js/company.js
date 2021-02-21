document.addEventListener('DOMContentLoaded', () => {
    Company.ShowAndCloseDocument();
});
class Company{
    static ShowAndCloseDocument() {
        var items1= document.querySelectorAll('.SectionCompany .docItems li'),
            items2=document.querySelectorAll('.SectionCompany .docItems2 li'),
            section=document.querySelector('.infoSectionCompany'),
            block=section.querySelector('.block'),
            close=section.querySelector('.block .closeBlock img'),
            closeBlock=block.querySelector('.closeBlock')
        if(close){
            close.addEventListener('click',()=>{
                section.style.display='none';
            });
        }
        if(items1){
            for(let i=0;i<items1.length;i++){
                items1[i].addEventListener('click',()=>{
                    var img=block.querySelector('.docImage'),
                        ITEMS=closeBlock.querySelectorAll('div');
                   if(i === 2){
                       if(img && section) {
                           for(let i=0;i<ITEMS.length;i++){
                               if(i === 2){
                                   ITEMS[i].style.display='block';
                               }else{
                                    ITEMS[i].style.display='none'
                               }
                           }
                           img.src = "img/gos3Svid.jpeg";
                           section.style.display = 'block';
                       }
                   }else if(i === 1){
                       if(img && section) {
                           for(let i=0;i<ITEMS.length;i++){
                               if(i === 1){
                                   ITEMS[i].style.display='block';
                               }else{
                                    ITEMS[i].style.display='none'
                               }
                           }
                           img.src = "img/gos2kz.jpeg";
                           section.style.display = 'block';
                       }
                   }else if(i === 0){
                       if(img && section) {
                           for(let i=0;i<ITEMS.length;i++){
                               if(i === 0){
                                   ITEMS[i].style.display='block';
                               }else{
                                    ITEMS[i].style.display='none'
                               }
                           }
                           img.src = "img/gos1ru.jpeg";
                           section.style.display = 'block';
                       }
                   }
                });
            }
        }
        if(items2){
            for(let i=0;i<items2.length;i++){
                items2[i].addEventListener('click',()=>{
                    var img=block.querySelector('.docImage'),
                        ITEMS=closeBlock.querySelectorAll('div');
                    if(i === 1){
                        if(img && section) {
                            for(let i=0;i<ITEMS.length;i++){
                                if(i === 4){
                                    ITEMS[i].style.display='block';
                                }else{
                                    ITEMS[i].style.display='none';
                                }
                            }
                            img.src = "img/bank4.jpeg";
                            section.style.display = 'block';
                        }
                    }else if(i === 0){
                        if(img && section) {
                            for(let i=0;i<ITEMS.length;i++){
                                if(i === 3){
                                    ITEMS[i].style.display='block';
                                }else{
                                    ITEMS[i].style.display='none';
                                }
                            }
                            img.src = "img/bank.jpeg";
                            section.style.display = 'block';
                        }
                    }
                });
            }
        }
    }
}
