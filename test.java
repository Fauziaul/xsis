import java.util.Scanner;

public class StringManipulation {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // Meminta input string dari pengguna
        System.out.print("Masukkan sebuah kata: ");
        String string = scanner.nextLine();

        // Mengambil huruf awal
        char hurufAwal = string.charAt(0);
        System.out.println("Huruf Awal: " + hurufAwal);

        // Mengambil huruf akhir
        char hurufAkhir = string.charAt(string.length() - 1);
        System.out.println("Huruf Akhir: " + hurufAkhir);

        // Mengambil huruf tengah
        int panjangString = string.length();
        if (panjangString % 2 == 0) {
            // Jika jumlah karakter genap, ambil dua huruf tengah
            int indexTengah = panjangString / 2;
            String hurufTengah = string.substring(indexTengah - 1, indexTengah + 1);
            System.out.println("Huruf Tengah (Genap): " + hurufTengah);
        } else {
            // Jika jumlah karakter ganjil, ambil satu huruf tengah
            int indexTengah = panjangString / 2;
            char hurufTengah = string.charAt(indexTengah);
            System.out.println("Huruf Tengah (Ganjil): " + hurufTengah);
        }

        // Menutup Scanner
        scanner.close();
    }
}