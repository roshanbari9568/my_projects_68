package com.example.authenticationdemo;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import java.security.PrivateKey;

public class MainActivity extends AppCompatActivity {

    private TextView name;
    private  TextView password;
    private TextView info;
    private Button login;


    private int counter=5;




    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        name=(TextView)findViewById(R.id.tex1);
        password=(TextView)findViewById(R.id.tex2);
        info=(TextView)findViewById(R.id.tex3);
        login=(Button) findViewById(R.id.btnLogin);

        info.setText("No of attempts remaining: 5");

        login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                validate(name.getText().toString(),toString());

            }
        });
    }

    private void validate(String userName, String passWord)
    {
        if(userName=="roshan" && passWord=="9568")
        {
            Intent intent=new Intent(MainActivity.this, SecondActivity.class);
            startActivity(intent);
        }
        else
        {

            counter--;

            info.setText("No of Attempts remaining" +String.valueOf(counter));
            if(counter==0)
            {

                login.setEnabled(false);
            }
        }

    }
}
