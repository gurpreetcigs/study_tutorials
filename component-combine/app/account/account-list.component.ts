import {Component} from '@angular/core';
import {Account} from './account.model'; 
@Component({
    selector:'account-list',
    templateUrl:'app/account/account-list.component.html'
})
export class AccountsList{
    
    private _nextId = 3;
    private _accounts:Array<Acccount> = [
        new Account(1,"Bank of Baroda","My First account",500.10),
        new Account(2,"Bank asd","My secret account",1024.10) 
    ]
    private removeAcc(index:number){
        this._accounts.splice(index, 1)
    }
}

