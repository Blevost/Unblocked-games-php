function playSound(soundPath) {
    const audio = new Audio(soundPath);
    audio.volume = 0.3;
    audio.play();
  }
