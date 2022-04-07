package com.prototype.withfriends;

import android.Manifest;
import android.content.ContentValues;
import android.content.pm.PackageManager;
import android.database.sqlite.SQLiteDatabase;
import android.os.Bundle;
import android.os.Debug;
import android.os.StrictMode;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Toast;
import androidx.annotation.NonNull;
import androidx.core.app.ActivityCompat;
import androidx.fragment.app.Fragment;
import androidx.navigation.fragment.NavHostFragment;
import com.prototype.withfriends.databinding.RegisterFragmentBinding;

import java.io.IOException;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.sql.*;

import static android.database.sqlite.SQLiteDatabase.openOrCreateDatabase;

public class Register extends Fragment {

    private RegisterFragmentBinding binding;
    private SQLiteDatabase db;
    private Connection connection = null;

    @Override
    public View onCreateView(
            LayoutInflater inflater, ViewGroup container,
            Bundle savedInstanceState
    ) {

        binding = RegisterFragmentBinding.inflate(inflater, container, false);
        return binding.getRoot();

    }

    public void onViewCreated(@NonNull View view, Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);
        binding.registerButton.setOnClickListener(new View.OnClickListener() {
            MainActivity ma = new MainActivity();

            @Override
            public void onClick(View view) {
                RegisterButton();

            }
        });
    }
    public void RegisterButton() {
        if (connection != null) {
            Statement statement = null;
            try {
                String emailInput = binding.emailInput.getText().toString();
                String nameInput = binding.nameInput.getText().toString();
                String surnameInput = binding.surnameInput.getText().toString();
                String passwordInput = binding.passwordInput.getText().toString();
                String dobInput = "2000-02-03"; //binding.dateInput.getText().toString();
                String confirmPasswordInput = binding.confirmPassword.getText().toString();
                String friendCodeInput = "222222";
                String registerStatement = ("INSERT INTO users (name, email, password, dateOfBirth, friendCode)" +
                        " VALUES (nameInput, emailInput, passwordInput, dobInput, friendCodeInput)");
                statement = connection.createStatement();
                ResultSet resultSet = statement.executeQuery(registerStatement);

            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
    }
  /*  public void RegisterUser(){
        try {
           // SQLiteDatabase mydatabase = openOrCreateDatabase("your database name",MODE_PRIVATE,null);



            String emailInput = binding.emailInput.getText().toString();
            String nameInput = binding.nameInput.getText().toString();
            String surnameInput = binding.surnameInput.getText().toString();
            String passwordInput =  binding.passwordInput.getText().toString();
            String dobInput = "2000-02-03"; //binding.dateInput.getText().toString();
            String confirmPasswordInput = binding.confirmPassword.getText().toString();
            String friendCodeInput = "222222";
            Statement st = connection.createStatement();

            //String [] credentials = {email,name,surname,dob,password,confirmPassword,friendCode};Statement st = connection.CreateStatement();
            String registerStatement = ("INSERT INTO users (name, email, password, dateOfBirth, friendCode)" +
                    " VALUES (nameInput, emailInput, passwordInput, dobInput, friendCodeInput)");
            db.execSQL(registerStatement);
          //  ResultSet rs = st.executeQuery(registerStatement);
            db.execSQL(registerStatement);
            } catch (SQLException e) {
                e.printStackTrace();
            }


    }*/

    @Override
    public void onDestroyView() {
        super.onDestroyView();
        binding = null;
    }

}