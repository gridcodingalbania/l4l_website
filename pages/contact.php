<?php
/**
 * Template Name: Contact
 */
?>
<style>
<?php include 'app.css'; ?>
</style>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arimo" />
<link href="http://fonts.cdnfonts.com/css/dm-serif-display" rel="stylesheet">
<!-- <script src="https://www.google.com/recaptcha/enterprise.js?render=6LfCvxciAAAAAO7O93Md-UpiaDC2PULYybkulNIo"></script> -->
<script src="https://www.google.com/recaptcha/api.js"></script>

<?php get_header(); ?>
    <?php 
    $siteKey = '6LfUXRgiAAAAAN-eBt4lGrMO8UqwyPmNQqaYccbP';
    $secretKey = '6LfUXRgiAAAAAL_817HWxnImWorwb0rCkgY5vBIJ'; ?>

<div>
    <div  id="my_form" class="bg-contact ">
        <div id="main-text-c" class="2xl:w-8/12 xl:w-8/12  lg:w-8/12 w-11/12  pt-28 mx-auto text-5xl font-normal leading-10 main-text-contact">
            Contattaci
        </div>
        <div class="pb-28 mx-auto  w-fit ">
            <form action="#" class="mb-auto w-max pl-4 pr-8" id="contact_form" action="/action_page.php">
                <div id="main-text-con" class="pb-4 pt-28 mx-auto text-5xl font-normal leading-10 main-text-contact">
                    Contattaci
                </div>
                <div class="mt-6 2xl:mt-12 xl:mt-12 lg:mt-12 md:mt-12 sm:mt-12">
                    <label for="name">Nome e Cognome</label><br>
                    <input class="mt-4 pb-2 pl-2.5 underline-form" type="text" id="nome"  placeholder="Lorem ipsum" required>
                </div>
                <div class="mt-8">
                    <label for="E-mail">E-mail</label><br>
                    <input class="mt-4 pb-2 pl-2.5 underline-form" type="text" id="E-mail"  placeholder="Lorem ipsum" required>
                </div>
                <div class="mt-8">
                    <label for="Messaggio">Messaggio</label><br>
                    <textarea class="mt-4 pb-2 pl-2.5 pt-2.5 resize-none box-border-form" type="text" id="Messaggio"  placeholder="Lorem ipsum" required></textarea>
                </div> 
                <div class="captcha mt-6 2xl:mt-12 xl:mt-12 lg:mt-12 md:mt-12 sm:mt-12">
                    <label for="name">Controllo di sicurezza*</label><br>
                    <div class="g-recaptcha mt-4 pb-2" data-sitekey="<?php echo $siteKey; ?>"></div><script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
                </div>
                <div class="mt-20 w-fit mx-auto ">
                    <button class="rounded-md bg-black gap-3 font-normal w-44 font-bold text-base text-white uppercase p-4 text-center button-form-contact modal-open " id="nextStep">invia</button>
                </div>
            </form>
            <div class=" flex items-center justify-center">
                <!--Modal-->
                <div class=" modal fixed z-30  opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                    <div class="modal-overlay absolute w-full h-full bg-black opacity-80 h-screen"></div>
                    <div class="modal-container z-30 bg-white md:max-w-xs mx-auto rounded shadow-lg z-50 overflow-y-auto">
                    <!-- Add margin if you want to see some of the overlay behind the modal-->
                    <div class="modal-content">
                      <div class=" pt-4 pl-14">  
                        <div class="modal-close cursor-pointer z-50 float-right mr-3">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                            </svg>
                        </div>
                        <p class="modal-main-text text-2xl font-normal pt-5 pr-14 text-center">Grazie per averci contattato</p>
                    </div>
                        <!--Body-->
                        <p class="text-center text-sm px-12 mt-0.5" style="font-family:'Arimo';">Al massimo entro 48 risponderemo al tuo messaggio</p>
                        <!--Footer-->
                        <div class="flex pt-7 pb-9 ">
                            <button class="mx-auto p-4 bg-black rounded-md text-white font-bold tracking-widest" style="width:232px;">Scopri Roar iD</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
 var openmodal = document.querySelectorAll('.modal-open')

for (var i = 0; i < openmodal.length; i++) {
    openmodal[i].addEventListener('click', function(event){
    event.preventDefault()
    toggleModal()
    })
}

const overlay = document.querySelector('.modal-overlay')
overlay.addEventListener('click', toggleModal)

var closemodal = document.querySelectorAll('.modal-close')
for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
}

function toggleModal () {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    if (document.getElementById("nome").value.length != 0 && document.getElementById("E-mail").value.length != 0 && document.getElementById("Messaggio").value.length != 0 ){
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
    }
    else if(document.getElementById("nome").value.length === 0){
        var element = document.getElementById("contact_form");
        element.scrollIntoView({behavior: "smooth"});
        document.getElementById("nome").focus();
        document.getElementById("nome").select();
    }
    else if(document.getElementById("E-mail").value.length === 0){
        var element = document.getElementById("contact_form");
        element.scrollIntoView({behavior: "smooth"});
        document.getElementById("E-mail").focus();
        document.getElementById("E-mail").select();
    }
    else if(document.getElementById("Messaggio").value.length === 0){
        var element = document.getElementById("contact_form");
        element.scrollIntoView({behavior: "smooth"});
        document.getElementById("Messaggio").focus();
        document.getElementById("Messaggio").select();
    }
    
}
</script>

<?php  get_footer(); ?>
