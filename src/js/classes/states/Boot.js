export default class Boot extends Phaser.State {
  preload() {
    this.load.spritesheet(`preloader`, `assets/preloader.png`, 222, 21);
  }

  create() {
    this.state.start(`Preload`);
  }
}
