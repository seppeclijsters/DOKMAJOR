import Boot from './states/Boot';
import Preload from './states/Preload';
import Menu from './states/Menu';
import Play from './states/Play';

export default class Game extends Phaser.Game {
  constructor() {
    super(600, 780, Phaser.AUTO, `content`);
    this.state.add(`Boot`, Boot);
    this.state.add(`Preload`, Preload);
    this.state.add(`Menu`, Menu);
    this.state.add(`Play`, Play);
    this.state.start(`Boot`);
  }
}
