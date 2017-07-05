<?= '<script type="text/x-template" id="fxTemplate">' ?>
<div class="row fxSetup">
    <figure class="col-sm-4">
        <img :src=img :alt="fxName">
    </figure>

    <div class="col-sm-8" id="fxParams">
        <fieldset class="audioParams">
            <template  v-for="param in params">
                <label for="param.name">{{ param.name }}</label>
                <input type="range" id="" :min="param.min" :max="param.max" :step="param.step" v-model="param.value" v-on:change="updatePatch">
                <output :for="param.name">{{ param.value }}</output>
            </template>
        </fieldset>
    </div>
</div>
<?= '</script>'  ?>

