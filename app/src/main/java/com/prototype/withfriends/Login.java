package com.prototype.withfriends;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import android.widget.EditText;
import android.widget.TextView;
import androidx.annotation.NonNull;
import androidx.fragment.app.Fragment;
import androidx.navigation.fragment.NavHostFragment;
import com.prototype.withfriends.databinding.LoginFragmentBinding;

public class Login extends Fragment {

    private LoginFragmentBinding binding;
    private TextView textView;
    private EditText editText;



    @Override
    public View onCreateView(
            LayoutInflater inflater, ViewGroup container,
            Bundle savedInstanceState
    ) {
        binding = LoginFragmentBinding.inflate(inflater, container, false);
        return binding.getRoot();
    }
    @Override
    public void onViewCreated(@NonNull View view, Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

        binding.registerButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                NavHostFragment.findNavController(Login.this)
                        .navigate(R.id.action_LoginFragment_to_RegisterFragment);
            }
        });
        binding.recoveryButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                NavHostFragment.findNavController(Login.this)
                        .navigate(R.id.action_LoginFragment_to_RecoveryFragment);
            }
        });
        binding.contactButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                NavHostFragment.findNavController(Login.this)
                        .navigate(R.id.action_loginFragment_to_ContactFragment);
            }
        });
        binding.faqButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                NavHostFragment.findNavController(Login.this)
                        .navigate(R.id.action_loginFragment_to_FaqFragment);
            }
        });
        binding.policiesButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                NavHostFragment.findNavController(Login.this)
                        .navigate(R.id.action_loginFragment_to_PoliciesFragment);
            }
        });
        binding.loginButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                loginVerify();
                NavHostFragment.findNavController(Login.this)
                        .navigate(R.id.action_loginFragment_to_loggedHomepageFragment);
            }
        });
    }
    public String[] loginVerify(){
        String email = binding.emailInput.getText().toString();
        String password = binding.passwordInput.getText().toString();
        String [] credentials = {email,password};
        String logStatement =  ("SELECT * FROM users WHERE userID = :id");

        return credentials;
    }
    @Override
    public void onDestroyView() {
        super.onDestroyView();
        binding = null;
    }

}