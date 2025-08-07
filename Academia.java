/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package academia;

/**
 *
 * @author BEATRIZ
 */
import java.util.Scanner;
public class Academia {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // Entrada de dados
        System.out.print("Digite o peso (em kg): ");
        double peso = scanner.nextDouble();

        System.out.print("Digite a altura (em metros): ");
        double altura = scanner.nextDouble();

        // Cálculo do IMC
        double imc = peso / (altura * altura);

        // Exibição do resultado
        System.out.printf("Seu IMC é: %.2f\n", imc);

        // Determinação do status
        if (imc < 18.5) {
            System.out.println("Status: Abaixo do peso");
        } else if (imc <= 24.9) {
            System.out.println("Status: Normal");
        } else if (imc <= 29.9) {
            System.out.println("Status: Acima do peso");
        } else {
            System.out.println("Status: Obesidade");
        }

        scanner.close();
    }
}