import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';

/*
  Generated class for the AuthServiceProvider provider.

  See https://angular.io/guide/dependency-injection for more info on providers
  and Angular DI.
*/
@Injectable()
export class AuthServiceProvider 
{
  private API_LOGIN = 'http://trackorder.mosaicweb.com.br/hospedagem/tcc/webservice.php?tipo=login';

  data: any;
  public url: '';
  email: '';
  password: '';
  
  constructor(public http: Http) { }

  logar(email: string, password: string) {
    return new Promise((resolve, reject) => {

      this.http.get(this.API_LOGIN + '&email='+email+'&password='+password)

      .subscribe((result: any) => {
          resolve(result.json());
      });  
    }); 
  }
}
