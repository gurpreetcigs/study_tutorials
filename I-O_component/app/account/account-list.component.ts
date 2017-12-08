import {Component, Input, Output, EventEmitter} from '@angular/core';
import {Account} from './account.model'; 
@Component({
    selector:'account-list',
    templateUrl:'app/account/account-list.component.html'
})
export class AccountsList{
    @Input('accounts') _accounts :Array<Account>;
    @Output('delete') delete = new EventEmitter<Number>();
    private _remove(index:number){
        this.delete.emit(index);
    }
  
}

