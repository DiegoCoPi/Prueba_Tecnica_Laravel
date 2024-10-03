import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class AlumnoService {

  private apiUrl = 'http://localhost:8000/api';

  constructor(private http: HttpClient) { }

  crearAlumno(alumno: any): Observable<any> {
    return this.http.post(`${this.apiUrl}/crear-alumno`, alumno, {
      headers: { 'X-API-KEY': 'tu_clave_api_secreta' }
    });
  }

  consultarAlumnosPorGrado(grado: string): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}/consultar-alumno/${grado}`, {
      headers: { 'X-API-KEY': 'tu_clave_api_secreta' }
    });
  }
}

