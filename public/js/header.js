document.addEventListener('DOMContentLoaded', () => {
    Header.ShowandCloseLangs();
    Header.ShowMobileV();
});
class Header {
    static ShowandCloseLangs(){
        var langs=document.querySelector('header .header_items .Items .item .header_items_lang'),
            block=document.querySelector('header .header_items .Items .langs'),
            blockItems=document.querySelectorAll('header .header_items .Items .langs a');
        if(blockItems){
            console.log(blockItems);
            for(let i=0;i<blockItems.length;i++){
                blockItems[i].addEventListener('click',(event)=>{
                    clearTimeout(Header.timer);
                    Header.timer=setTimeout(()=>{
                        block.style.display='none';
                        clearTimeout(Header.timer);
                    },5000);
                });
            }
        }
        if(langs){
            langs.addEventListener('click',()=>{
               if(block){
                   if(block.style.display == '' || undefined || null){
                       block.style.display='block';
                       Header.timer=setTimeout(()=>{
                           block.style.display='none';
                           clearTimeout(Header.timer);
                       },5000);
                   }else if(block.style.display == 'block'){
                       block.style.display='none';
                       clearTimeout(Header.timer);
                   }else if(block.style.display == 'none'){
                       block.style.display='block';
                       Header.timer=setTimeout(()=>{
                           block.style.display='none';
                           clearTimeout(Header.timer);
                       },5000);
                   }
               }
            });
        }
    }
    static ShowMobileV(){
        var button=document.querySelector('body header .header_logo .button_menu_mobile'),
            menuCheck=document.querySelector('body header .header_logo #menu');
        if(button){
            var d1=button.querySelector('.div1'),
                d2=button.querySelector('.div2'),
                d3=button.querySelector('.div3'),
                itemsBlock=document.querySelector('body header .header_items'),
                item=itemsBlock.querySelector('.Items');
            button.addEventListener('click',()=>{
                console.log(menuCheck);
                if(menuCheck.checked === true){
                    d1.style.cssText=' transform:translate(0, 0) rotate(0);';
                    d2.style.opacity='1';
                    d3.style.cssText=' transform:translate(0, 0) rotate(0);';
                    console.log('close');
                    item.style.cssText='opacity:0;display:none';
                    itemsBlock.style.cssText='z-index:0;height:0;';
                }else{
                    d1.style.cssText=' transform:translate(5px, 5px) rotate(45deg);';
                    d2.style.opacity='0';
                    d3.style.cssText='transform:translate(5px, -11px) rotate(-45deg);';
                    console.log('open');
                    item.style.cssText='opacity:1;display:block';
                    itemsBlock.style.cssText='z-index:20000;height:100vh;';
                }
            });
        }
    }
}
Header.timer='';
