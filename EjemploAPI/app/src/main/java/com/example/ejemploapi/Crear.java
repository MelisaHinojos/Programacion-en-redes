package com.example.ejemploapi;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.Button;
import android.widget.TextView;

public class Crear extends AppCompatActivity {
    TextView Nombre;
    TextView Email;
    TextView Contra;
    TextView Fecha;
    TextView Hora;
    Button boton;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_crear);

        Nombre=findViewById(R.id.Nombre);
        Email=findViewById(R.id.Email);
        Contra=findViewById(R.id.Contra);
        Fecha=findViewById(R.id.Fecha);
        Hora=findViewById(R.id.Hora);
        boton=findViewById(R.id.boton);
    }
}