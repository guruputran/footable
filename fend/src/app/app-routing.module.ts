import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { DformComponent } from './components/dform/dform.component';

export const routes: Routes = [
  {
    path: '',
    component: DformComponent
  }, {
    path: '**',
    component: DformComponent
  }
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }