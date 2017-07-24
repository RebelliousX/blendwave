<?= '<script type="text/x-template" id="effectTemplate">' ?>
<div class="row fxSetup">
    <figure class="col-sm-4">
        <img :src=fxList[fxname].img :alt=fxList[fxname].name>
    </figure>

    <div class="col-sm-8">
        <fieldset class="audioParams">
            <template v-for="param in fxParams">
                <label for="param.name">{{ param.name }}</label>
                <input type="range" :min="param.min" :max="param.max" :step="param.step" v-model="param.value" v-on:change="updateSlotData()">
                <output :for="param.value">{{ param.value }}</output>
            </template>
        </fieldset>
    </div>
</div>
<?= '</script>'  ?>
