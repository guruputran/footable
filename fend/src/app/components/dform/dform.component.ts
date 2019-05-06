import { Component, OnInit } from '@angular/core';
declare var jQuery:any;
import * as $ from 'jquery';

@Component({
  selector: 'app-dform',
  templateUrl: './dform.component.html',
  styleUrls: ['./dform.component.css']
})
export class DformComponent implements OnInit {

constructor() {}
ngOnInit() {
  
  jQuery(function($){
  $('.table').footable();
});

}
}