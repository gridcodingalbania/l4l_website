<div class="bg-page w-full full-page-wrapper lg:h-[60vh]" id="first_step">
    <div class="xs:m-5  md:container flex flex-row xs:flex-col md:flex-row xs:flex-wrap md:flex-nowrap">
        <div class="flex flex-col md:mt-20 md:mb-20 w-full">
            <p class="text-4xl text-flamingo family-DM">Seleziona il tuo fototipo</p>
            <p class="text-md w-50 family-Arimo mt-20">Intro acquisizione dati e attivazione del Beauty Passport x consulenza di base: Lorem i elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima veniam.</p>
        </div>
        <div class="flex flex-col justify-center mt-20 mb-20 w-full">
            <h3>Add data here</h3>
            <div class="text-center md:w-50">
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