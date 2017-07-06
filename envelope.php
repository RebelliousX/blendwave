<section class="panelContent envelope" data-panelname="envelope" id="envelope">
    <?php include('fileHeader.php')?> 

    <h3>Envelope<em>Manipule o comportamento do som ao longo do tempo</em></h3>

    <div class="row amp">
        <div class="col-sm-6">
            <fieldset id="ampEnvelope" class="audioParams">
                <legend>Volume</legend>

                <label for="amp_attack">Attack</label>
                <input type="range" id="amp_attack" min="0" value="0" max="10" step="0.1" data-type="audioParam">
                <output for="amp_attack">0</output>

                <label for="amp_release">Release</label>
                <input type="range" id="amp_release" min="0" value="0" max="10" step="0.1" data-type="audioParam">
                <output for="amp_release">0</output>
            </fieldset>

            <fieldset id="tremolo" class="audioParams disabled">
                <legend><input type="checkbox" /> Oscilar Volume</legend>

                <label for="tremolo_speed">Velocidade</label>
                <input type="range" id="tremolo_speed" min="1" value="5" max="20" step="1" data-type="audioParam" disabled="true">
                <output for="tremolo_speed">5</output>

                <label for="tremolo_depth">Força</label>
                <input type="range" id="tremolo_depth" min="0" value="1" max="1" step="0.1" data-type="audioParam" disabled="true">
                <output for="tremolo_depth">1</output>
            </fieldset>
        </div>

        <div class="col-sm-6">
            <fieldset id="pitchEnvelope" class="audioParams">
                <legend>Pitch</legend>

                <label for="pitch_ammount">Quantidade</label>
                <input type="range" id="pitch_ammount" min="-12" value="0" max="12" step="1" data-type="audioParam">
                <output for="pitch_ammount">0</output>
            </fieldset>

            <fieldset id="vibrato" class="audioParams disabled">
                <legend><input type="checkbox" /> Oscilar Pitch</legend>

                <label for="vibrato_speed">Speed</label>
                <input type="range" id="vibrato_speed" min="0" value="0" max="20" step="0.1" data-type="audioParam" disabled="true">
                <output for="vibrato_speed">0</output>

                <!--label for="pitch_osc_depth">Depth</label>
                <input type="range" id="pitch_osc_depth" min="1" value="0" max="100" step="1" data-type="audioParam">
                <output for="pitch_osc_depth">0</output-->
            </fieldset>
        </div>
    </div>

    <div class="row pitch">
        <div class="col-sm-6">

        </div>

        <div class="col-sm-6">

        </div>
    </div>
</section>