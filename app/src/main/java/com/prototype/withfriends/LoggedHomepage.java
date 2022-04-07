package com.prototype.withfriends;

import android.os.Bundle;
import androidx.annotation.NonNull;
import androidx.fragment.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import androidx.navigation.fragment.NavHostFragment;
import com.prototype.withfriends.databinding.LoggedHomepageFragmentBinding;


public class LoggedHomepage extends Fragment {

    private LoggedHomepageFragmentBinding binding;

    @Override
    public View onCreateView(
            LayoutInflater inflater, ViewGroup container,
            Bundle savedInstanceState
    ) {
        binding = LoggedHomepageFragmentBinding.inflate(inflater, container, false);
        return binding.getRoot();
    }
    @Override
    public void onViewCreated(@NonNull View view, Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);
        binding.contactButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                NavHostFragment.findNavController(LoggedHomepage.this)
                        .navigate(R.id.action_loggedHomePageFragment_to_contactFragment);
            }
        });
        binding.faqButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                NavHostFragment.findNavController(LoggedHomepage.this)
                        .navigate(R.id.action_loggedHomePageFragment_to_faqFragment);
            }
        });
        binding.policiesButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                NavHostFragment.findNavController(LoggedHomepage.this)
                        .navigate(R.id.action_loggedHomePageFragment_to_policiesFragment);
            }
        });
        binding.settingsButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                NavHostFragment.findNavController(LoggedHomepage.this)
                        .navigate(R.id.action_loggedHomePageFragment_to_settingsFragment);
            }
        });
    }
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
    }


}