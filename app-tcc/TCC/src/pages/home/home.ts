import { AuthServiceProvider } from './../../providers/auth-service/auth-service';

import { Component } from '@angular/core';
import { NavController, NavParams, ToastController } from 'ionic-angular';
import { MenuPage } from '../menu/menu';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})

export class HomePage {

  model: Aluno;

  constructor(public navCtrl: NavController, public navParams: NavParams, private toast: ToastController, private authServiceProvider: AuthServiceProvider) {
	//inicializo os metodos que vou usar na pagina
	this.model = new Aluno();
  }

  realizarLogin() {
    this.authServiceProvider.logar(this.model.email, this.model.password)
      .then((result: any) => {
        if(result.success == "false"){ 
          this.toast.create({ message: 'Usuário e/ou senha inválidos.', position: 'botton', duration: 4000 }).present();
        }
        else
        {
          this.toast.create({ message: result.nome + ' logado com sucesso.', position: 'botton', duration: 3000 }).present();

          //logado com sucesso direciona para o menu
          this.navCtrl.setRoot(MenuPage);
        }
      }) 
      //msg de erro caso ocorra algo estranho
      .catch((error: any) => {
        this.toast.create({ message: 'Erro ao efetuar login. Erro: ' + error, position: 'botton', duration: 3000 }).present();
      });
  }
}

//metodos da classe aluno
export class Aluno {
  email: string;
  password: string;
  cpf: string;
  nome: string;
}