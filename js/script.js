function scannerExecute(){
    let scanner = new Instascan.Scanner({
        video: document.getElementById('preview')
    });

    scanner.addListener('scan', function(content) {
        const qrCodeValue = content;
        const inputElement = document.getElementById('teste');
        inputElement.value = qrCodeValue;

        window.location.replace("https://paineis.hnsg.org.br/carteira_unimed/?teste="+inputElement.value+"");

    });
    
    Instascan.Camera.getCameras().then(cameras => {
        if (cameras.length > 0) {
            scanner.start(cameras[0]);
        } else {
            console.error("Não existe câmera no dispositivo!");
        }
    }).catch(e => console.error(e));
}
function copiarTexto(){
    let input1 = document.querySelector('#teste')
    input1.select();
    
    document.execCommand("copy")
    alert("Código copiado")

}

/* const inputElement = document.getElementById('teste');
inputElement.addEventListener('animationstart', function(event) {
    if (event.key === 'Enter') {
        alert('Enter press')
    }
});
 */
