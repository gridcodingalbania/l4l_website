<?php $siteKey = '6LfUXRgiAAAAAN-eBt4lGrMO8UqwyPmNQqaYccbP'; ?>

<div class="bg-page w-full full-page-wrapper h-[100vh]">
    <div class="flex container flex-row justify-evenly margin-[0 auto] xs:flex-wrap lg:flex-nowrap">
        <div class="flex flex-col mt-20 mb-20 w-full">
            <p class="text-4xl text-flamingo family-DM">Pronti a Ruggire?</p>
            <p class="text-4xl family-DM">Registrati</p>
            <p class="mt-5 text-md w-2/3 leading-6 tracking-tight family-Arimo">Intro acquisizione dati e attivazione del Beauty Passport x consulenza di base: Lorem i elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima veniam.</p>
        </div>

        <div class="flex flex-col justify-center mt-20 mb-20 w-full">
            <div class="relative z-0 mb-5">
                <input type="text" id="nome" class="block family-Arimo py-2 px-0 w-80 text-sm text-input bg-transparent border-0 border-b-2 border-label appearance-none focus:outline-none focus:ring-0 focus:border-label peer" placeholder=" " />
                <label for="nome" class="family-Arimo absolute text-md text-label duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-label peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome </label>
            </div>
            <div class="relative z-0 mb-5">
                <input type="text" id="cognome" class="block family-Arimo py-2 px-0 w-80 text-sm text-input bg-transparent border-0 border-b-2 border-label appearance-none focus:outline-none focus:ring-0 focus:border-label peer" placeholder=" " />
                <label for="cognome" class="family-Arimo absolute text-md text-label duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-label peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Cognome</label>
            </div>
            <div class="relative z-0 mb-5">
                <input type="text" id="email" class="block family-Arimo py-2 px-0 w-80 text-sm text-input bg-transparent border-0 border-b-2 border-label appearance-none focus:outline-none focus:ring-0 focus:border-label peer" placeholder=" " />
                <label for="email" class="family-Arimo absolute text-md text-label duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-label peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">E-mail</label>
            </div>
            <div class="relative z-0 mb-5 w-50">
                <input type="password" id="password" class="family-Arimo block py-2 px-0 w-80 text-sm text-input bg-transparent border-0 border-b-2 border-label appearance-none focus:outline-none focus:ring-0 focus:border-label peer" placeholder=" " />
                <label for="password" class="family-Arimo absolute text-md text-label duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-label peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Passowrd</label>
            </div>
            <div class="flex flex-row mb-5 items-baseline">
                <input type="radio" />
                <p class="ml-2 w-50 family-Arimo text-sm text-label">
                    Accetto di ricevere informazioni via e-mail su offerte, servizi, prodotti ed eventi di Roar Cosmetics, in conformità con la nostra Informativa sulla privacy.
                </p>
            </div>
            <p class="w-50 family-Arimo text-sm text-label mb-5">
                Creando un account, accetta le Condizioni generali di utilizzo e acconsente al trattamento dei suoi dati personali, in conformità con la Informativa sulla privacy di Roar Cosmetics.
            </p>
            <div class="text-center">
                <div class="g-recaptcha mt-4 pb-2 " data-sitekey="<?php echo $siteKey; ?>"></div>
            </div>
            <div class="text-center w-50">
                <input type="button" class="family-Arimo mt-8 bg-input text-white h-[46px] font-bold tracking-1p w-[204px] rounded-md cursor-pointer uppercase" value="Registrati" />
            </div>
        </div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js"></script>