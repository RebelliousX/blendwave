var default_data = {
    file: 'samples/sine.wav',
    attack: 0.01,
    release: 0.04,
    detune: 1,
    tremolo_speed: 5,
    tremolo_depth: 1,
    vibrato_speed: 2,
}

var patch = {
    data: {
        file: '',
        attack: 0,
        release: 0,
        detune: 0,
        tremolo_speed: 0,
        tremolo_depth: 0,
        vibrato_speed: 0,
    },
    effects: {
        tremolo: new Pizzicato.Effects.Tremolo({
            mix: 1,
            speed: default_data.tremolo_speed,
            depth: default_data.tremolo_depth
        }),
        vibrato: {
            mix: 0,
            set: function(){
                if (this.mix != 0){
                    var osc = Pizzicato.context.createOscillator();
                    osc.frequency.value = patch.data.vibrato_speed;
                    osc.connect(patch.sound.sourceNode.playbackRate);
                    osc.start();
                }

            }
        }
    },
    sound: {},
    create: function(){
        patch.resetData();
        patch.sound = new Pizzicato.Sound({
            source: 'file',
            options: {
                path: patch.data.file,
                attack: patch.data.attack + 0.04,
                volume: patch.data.volume,
                loop: true
            }
        }, function() {
            //console.log(patch.sound);
        });
    },
    resetData: function(){
        for (var property in patch.data) {
            patch.data[property] = default_data[property];
        }
    },
    updateData: function(){
        //Volume Envelope
        patch.sound.volume = 1;
        patch.sound.attack = patch.data.attack;
        patch.sound.release = patch.data.release;

        //Tremolo
        patch.effects.tremolo.speed = patch.data.tremolo_speed;
        patch.effects.tremolo.depth = patch.data.tremolo_depth;
    },
    play: function(){
        patch.updateData();
        patch.sound.play();
        patch.effects.vibrato.set();
        //Detune must be called right after playing, or the node won't exist
        patch.sound.sourceNode.detune.value = patch.data.detune;
    },
    stop: function(){
        patch.sound.stop();
    }
}

var patches = {
    init: function(){
        patch.create();
    }
}














