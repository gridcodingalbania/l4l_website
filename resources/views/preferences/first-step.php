<div class="bg-page w-full full-page-wrapper lg:h-[60vh]" id="first_step">
    <div class="xs:m-5  md:container flex flex-row xs:flex-col md:flex-row xs:flex-wrap md:flex-nowrap">
        <div class="flex flex-col md:mt-20 md:mb-20 w-full">
            <p class="text-4xl text-flamingo family-DM">Seleziona il tuo fototipo</p>
            <p class="text-md w-50 family-Arimo mt-20">Intro acquisizione dati e attivazione del Beauty Passport x consulenza di base: Lorem i elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima veniam.</p>
        </div>
        <div class="flex flex-col justify-center mt-20 mb-20 w-full">
            <div class="grid xs:grid-cols-1 md:grid-cols-2 md:w-2/3 gap-6" id="haircolors">
                <div class="border border-label rounded-md p-1" id="lattea_option">
                    <input type="radio" name="haircolor" id="lattea" />
                    <label class="pl-5 cursor-pointer" for="lattea">Lattea/rossastra</label>
                </div>
                <div class="border border-label rounded-md p-1" id="molto_chiara_option">
                    <input type="radio" name="haircolor" id="molto_chiara" />
                    <label class="pl-5 cursor-pointer" for="molto_chiara">Molto chiara</label>
                </div>
                <div class="border border-label rounded-md p-1" id="mediamente_option">
                    <input type="radio" name="haircolor" id="mediamente" />
                    <label class="pl-5 cursor-pointer" for="mediamente">Mediamente chiara</label>
                </div>
                <div class="border border-label rounded-md p-1" id="leggermente_option">
                    <input type="radio" name="haircolor" id="leggermente" />
                    <label class="pl-5 cursor-pointer" for="leggermente">Leggermente scura/olivastra</label>
                </div>
                <div class="border border-label rounded-md p-1" id="scura_mulatta_option">
                    <input type="radio" name="haircolor" id="scura_mulatta" />
                    <label class="pl-5 cursor-pointer" for="scura_mulatta">Scura/mulatta</label>
                </div>
                <div class="border border-label rounded-md p-1" id="scurissima_nera_option">
                    <input type="radio" name="haircolor" id="scurissima_nera" />
                    <label class="pl-5 cursor-pointer" for="scurissima_nera">Scurissima/nera</label>
                </div>

            </div>
            <div class="text-center md:w-2/3">
                <input type="button" id="switch_first_step" class="family-Arimo mt-8 bg-input text-white h-[46px] font-bold tracking-1p w-[204px] rounded-md cursor-pointer uppercase" value="Conferma" />
                <p class="text-gray-400 mt-5 cursor-pointer" id="skip_to_second_step">Skip</p>
            </div>
        </div>
    </div>
</div>

<div id="second_step">
    <?php view('preferences.second-step'); ?>
</div>
<div id="third_step">
    <?php view('preferences.third-step'); ?>
</div>
<div id="fourth_step">
    <?php view('preferences.fourth-step'); ?>
</div>

<script type="text/javascript">
    //Divs
    let lattea = $("#lattea_option");
    let molto_chiara = $("#molto_chiara_option");
    let mediamente = $("#mediamente_option");
    let leggermente = $("#leggermente_option");
    let scura_mulatta = $("#scura_mulatta_option");
    let scurissima_nera = $("#scurissima_nera_option");

    //Options
    let lattea_option = $("#lattea");
    let molto_chiara_option = $("#molto_chiara");
    let mediamente_option = $("#mediamente");
    let leggermente_option = $("#leggermente");
    let scura_mulatta_option = $("#scura_mulatta");
    let scurissima_nera_option = $("#scurissima_nera");


    lattea_option.click(() => {
        var checked = lattea_option.is(":checked");
        if (checked) {
            lattea.addClass("lattea");
            molto_chiara.removeClass("molto-chiara");
            mediamente.removeClass("mediamente");
            leggermente.removeClass("leggermente");
            scura_mulatta.removeClass("scura-mulatta");
            scurissima_nera.removeClass("scurissima-nera");

        }
    })

    molto_chiara_option.click(() => {
        var checked = molto_chiara_option.is(":checked");
        if (checked) {
            lattea.removeClass("lattea");
            molto_chiara.addClass("molto-chiara");
            mediamente.removeClass("mediamente");
            leggermente.removeClass("leggermente");
            scura_mulatta.removeClass("scura-mulatta");
            scurissima_nera.removeClass("scurissima-nera");
        }
    })

    mediamente_option.click(() => {
        var checked = mediamente_option.is(":checked");
        if (checked) {
            lattea.removeClass("lattea");
            molto_chiara.removeClass("molto-chiara");
            mediamente.addClass("mediamente");
            leggermente.removeClass("leggermente");
            scura_mulatta.removeClass("scura-mulatta");
            scurissima_nera.removeClass("scurissima-nera");
        }
    })

    leggermente_option.click(() => {
        var checked = leggermente_option.is(":checked");
        if (checked) {
            lattea.removeClass("lattea");
            molto_chiara.removeClass("molto-chiara");
            mediamente.removeClass("mediamente");
            leggermente.addClass("leggermente");
            scura_mulatta.removeClass("scura-mulatta");
            scurissima_nera.removeClass("scurissima-nera");
        }
    })

    scura_mulatta_option.click(() => {
        var checked = scura_mulatta_option.is(":checked");
        if (checked) {
            lattea.removeClass("lattea");
            molto_chiara.removeClass("molto-chiara");
            mediamente.removeClass("mediamente");
            leggermente.removeClass("leggermente");
            scura_mulatta.addClass("scura-mulatta");
            scurissima_nera.removeClass("scurissima-nera");
        }
    })
    scurissima_nera_option.click(() => {
        var checked = scurissima_nera_option.is(":checked");
        if (checked) {
            lattea.removeClass("lattea");
            molto_chiara.removeClass("molto-chiara");
            mediamente.removeClass("mediamente");
            leggermente.removeClass("leggermente");
            scura_mulatta.removeClass("scura-mulatta");
            scurissima_nera.addClass("scurissima-nera");
        }
    })
</script>


<script type="text/javascript">
    //Function to switch steps

    //Hide all steps exect First Step

    $("#second_step").hide();
    $("#third_step").hide();
    $("#fourth_step").hide();

    //Switch to second step

    $("#switch_first_step").click(function() {
        $("#second_step").show();
        $("#first_step").hide();
    })

    //Switch to third step
    $("#switch_second_step").click(() => {
        $("#second_step").hide();
        $("#third_step").show();
    })

    //Switch to last step
    $("#switch_third_step").click(() => {
        $("#third_step").hide();
        $("#fourth_step").show();
    })
</script>