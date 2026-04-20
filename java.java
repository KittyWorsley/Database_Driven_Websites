/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package MainGui;

/**
 *
 * @author kitty
 */
import javax.swing.*;
import java.awt.*;

public class java {

    public static void main(String[] args) {
        JFrame frame = new JFrame("Teddy Bear Shop");
        frame.setSize(600, 400);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLayout(new BorderLayout());

        JPanel nav = new JPanel();
        JButton homeBtn = new JButton("Home");
        JButton aboutBtn = new JButton("About");
        JButton productsBtn = new JButton("Products");
        JButton contactBtn = new JButton("Contact");
        JButton loginBtn = new JButton("Login");

        nav.add(homeBtn);
        nav.add(aboutBtn);
        nav.add(productsBtn);
        nav.add(contactBtn);
        nav.add(loginBtn);

        JTextArea content = new JTextArea();
        content.setEditable(false);
        content.setLineWrap(true);
        content.setWrapStyleWord(true);
        content.setText("Welcome to our Teddy Bear Shop, where we sell the softest and most cuddly bears!");

        homeBtn.addActionListener(e -> {
            content.setText("Welcome to the Teddy Bear Shop, where we sell the softest and most cuddly bears!");
        });

        aboutBtn.addActionListener(e -> {
            content.setText("About us: We are passionate about teddy bears and bringing joy to everyone.");
        });
        productsBtn.addActionListener(e -> {
            content.setText(
                    "Products"
            "Classic Teddy Bear -> £13"
            "Giant Elephant Teddy -> £35"
"Mini pocket teddy bear -> £8"
"Marry me teddy bear -> £10"

contactBtn.addActionListener(e -> {
                content.setText(
                        "Contact Us\n"
                        + "Email = info@TeddyBearShop.com\n"
                        + "Phone: 07123 4567"
                );
            });

            loginBtn.addActionListener(e -> {
                content.setText(
                        "Login\n"
                        + "Enter Email\n"
                        + "Enter Password"
                );
            });
            "Enter Password"
            );

 frame.add(nav, BorderLayout.NORTH);
            frame.add(new JScrollPane(content), BorderLayout.CENTER);

            frame.setVisible(true);
        }
    }
