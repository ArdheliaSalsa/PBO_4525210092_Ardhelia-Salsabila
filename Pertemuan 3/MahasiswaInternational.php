<?php

class MahasiswaInternational {
    private ?string $nama;
    private ?string $nim;
    private ?int $umur;
    private ?string $negaraAsal;

    // Constructor dengan nilai default agar mendukung berbagai cara instansiasi (0, 3, atau 4 parameter)
    public function __construct(
        ?string $nama = null,
        ?string $nim = null,
        ?int $umur = 0,
        ?string $negaraAsal = null
    ) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->umur = $umur;
        $this->negaraAsal = $negaraAsal;
    }

    // Setter
    public function setNama(string $nama): void {
        $this->nama = $nama;
    }

    public function setNim(string $nim): void {
        $this->nim = $nim;
    }

    public function setUmur(int $umur): void {
        $this->umur = $umur;
    }

    public function setNegaraAsal(string $negaraAsal): void {
        $this->negaraAsal = $negaraAsal;
    }

    // Getter
    public function getNama(): ?string {
        return $this->nama;
    }

    public function getNim(): ?string {
        return $this->nim;
    }

    public function getUmur(): ?int {
        return $this->umur;
    }

    public function getNegaraAsal(): ?string {
        return $this->negaraAsal;
    }

    // Method menampilkan informasi mahasiswa
    public function tampilkanInfo(): void {
        echo "Nama        : " . ($this->nama ?? '-') . PHP_EOL;
        echo "NIM         : " . ($this->nim ?? '-') . PHP_EOL;
        echo "Umur        : " . ($this->umur ?? 0) . " tahun" . PHP_EOL;
        echo "Negara Asal : " . ($this->negaraAsal ?? '-') . PHP_EOL;
        echo "-----------------------------------" . PHP_EOL;
    }
}