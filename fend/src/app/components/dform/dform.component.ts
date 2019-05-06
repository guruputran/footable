import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, FormArray } from '@angular/forms';

@Component({
  selector: 'app-dform',
  templateUrl: './dform.component.html',
  styleUrls: ['./dform.component.css']
})
export class DformComponent implements OnInit {
orderForm: FormGroup;
items: FormArray;

constructor(private formBuilder: FormBuilder) {}
ngOnInit() {
  this.orderForm = this.formBuilder.group({
    customerName: '',
    email: '',
    items: this.formBuilder.array([ this.createItem() ])
  });
}

createItem(): FormGroup {
  return this.formBuilder.group({
    name: '',
    description: '',
    price: ''
  });
}

addItem(): void {
  this.items = this.orderForm.get('items') as FormArray;
  this.items.push(this.createItem());
}

}