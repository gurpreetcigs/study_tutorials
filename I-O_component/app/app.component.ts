import { Component } from '@angular/core';
import { Account } from './account/account.model';
import { AccountsList} from './account/account-list.component';

@Component({
  selector: 'my-app',
  templateUrl: 'app/app.component.html',
  declarations: [AccountsList]
  
})
export class AppComponent {
  
  private _nextId = 3;
  
    private _accounts:Array<Acccount> = [
       new Account(1,"Bank of Baroda","My First account",500.10),
        new Account(2,"Bank asd","My secret account",1024.10) 
    ]
    private createAcc(title:string, desc:string, balance:number ){
    this._accounts.push(new Account(this._nextId,
              title.value,
              desc.value,
              balance.value)
              );
    this._nextId++;
    title.value = "";
    desc.value = "";
    balance.value = 0;
    }
    public removeAcc(index:number){ 
      console.log(index);
        this._accounts.splice(index, 1)
    }
  
  
}


/*
Copyright 2017 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://v2.angular.io/license
*/