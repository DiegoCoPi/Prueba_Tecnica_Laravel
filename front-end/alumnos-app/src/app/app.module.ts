import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from '@angular/forms';  // Importa FormsModule
import { AppComponent } from './app.component';
import { ConsultarAlumnoComponent } from './consultar-alumno/consultar-alumno.component';

@NgModule({
  declarations: [
    AppComponent,
    ConsultarAlumnoComponent,
  ],
  imports: [
    BrowserModule,
    FormsModule,  // Añade FormsModule aquí
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
