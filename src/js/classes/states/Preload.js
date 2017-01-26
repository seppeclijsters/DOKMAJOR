export default class Preload extends Phaser.State {
  preload() {
    this.asset = this.add.sprite(this.game.width / 2, this.game.height / 2, `preloader`);
    this.asset.animations.add(`preloading`);
    this.asset.animations.play(`preloading`, 30, true);
    this.asset.anchor.setTo(0.5, 0.5);
  }

  create() {

  }
}
