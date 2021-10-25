const tanah = document.querySelectorAll('.tanah');
const pala = document.querySelectorAll('.pala');
const papanSkor = document.querySelector('.papan-skor');
const slap = document.querySelector('#slap');
const lagu = document.querySelector('#lagu');

let tanahSebelumnya;
let selesai;
let skor;

function randomTanah(tanah) {
    const t = Math.floor(Math.random() * tanah.length);
    const tRandom = tanah[t];
    if (tRandom == tanahSebelumnya) {
        randomTanah(tanah);
    }
    tanahSebelumnya = tRandom;
    return tRandom;
}

function randomWaktu(min, max) {
    return Math.round(Math.random() * (max - min) + min);
}

function munculkanpala() {
    const tRandom = randomTanah(tanah);
    const wRandom = randomWaktu(300, 1000);
    tRandom.classList.add('muncul');

    setTimeout(() => {
        tRandom.classList.remove('muncul');
        if (!selesai) {
            munculkanpala();
        }
    }, wRandom);
}

function mulai() {
    selesai = false;
    skor = 0;
    lagu.play();
    papanSkor.textContent = 0;
    munculkanpala();
    setTimeout(() => {
        selesai = true;
    }, 100 * 1000); //per detik
}

function pukul() {
    skor++;
    this.parentNode.classList.remove('muncul');
    slap.currentTime = 0;
    slap.play();
    papanSkor.textContent = skor;
}

pala.forEach(t => {
    t.addEventListener('click', pukul);
});
