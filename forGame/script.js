function liftmoveS() {
	SoundLiftMove = new Audio();
 	SoundLiftMove.src = 'SoundLiftMove.mp3';
	SoundLiftMove.play();

	setTimeout(SoundLiftMove.stop(), 2000);
}