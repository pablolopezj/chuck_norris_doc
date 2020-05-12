// Inicializar el proveedor de credenciales de Amazon Cognito
AWS.config.region = 'us-east-2'; // Región
AWS.config.credentials = new AWS.CognitoIdentityCredentials({
    IdentityPoolId: 'us-east-2:1bf7dac3-315f-4b98-9a7a-edda14dc33f4',
});

const speakText = (text) => {
    // JSON parameters for getSynthesizeSpeechUrl
    const speechParams = {
        OutputFormat: "mp3",
        SampleRate: "16000",
        Text: "",
        TextType: "text",
        VoiceId: (remoteConfig.voice != '') ? remoteConfig.voice: 'Joanna'
    };

    speechParams.Text = text;
    // Create the Polly service object and presigner object
    const polly  = new AWS.Polly({apiVersion: '2016-06-10'});
    const signer = new AWS.Polly.Presigner(speechParams, polly)

    // Create presigned URL of synthesized speech file
    signer.getSynthesizeSpeechUrl(speechParams, (error, url) => {
        if (!error) {
            document.getElementById('audioSource').src = url;
            document.getElementById('audioPlayback').load();
        }
    });
}

const parseJson = (json) => {
    document.getElementById("joke").innerHTML = json.value.joke;
    speakText(json.value.joke);
}

const joke = () => {
    const xmlhttp = new XMLHttpRequest();
    const url = "https://api.icndb.com/jokes/random";

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var json = JSON.parse(this.responseText);
        parseJson(json);
      }
    };

    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

const media = () => {
    var list  =  {
        0: {type: 'img', file: 'chuknorris_gif_03.gif'},
        1: {type: 'img', file: 'chuknorris_gif_04.gif'},
        2: {type: 'img', file: 'chucknorris_03.jpg'},
        3: {type: 'img', file: 'chucknorris_04.jpg'},
        4: {type: 'img', file: 'chucknorris_02.jpg'},
        5: {type: 'record', file: 'Chucknorris1'},
    };

    let random    = Math.floor(Math.random() * 6);
    let container = document.getElementsByClassName("media");
    console.log(random);

    let url = '';
    if ( list[random].type === 'img'){
        url = 'https://chuck-norris-media.s3.us-east-2.amazonaws.com/images/' + list[random].file;
        container[0].innerHTML = '<img class="media-chuk" src="'+url+'" id="picture" alt="">';
    } else {
        url = 'https://chuck-norris-media.s3.us-east-2.amazonaws.com/media/' + list[random].file;
        container[0].innerHTML = '<video class="media-chuk" controls autoplay loop><source  src="'+url+'.webm" type="video/webm"><source  src="'+url+'.mp4" type="video/mp4"></video>';
    }
}

document.getElementById("newJoke").addEventListener("click", () => {
    joke();
    media();
});

joke();
