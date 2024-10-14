<?php 

class Owner {
    public string $name;
    public string $address;
    public string $zipCode;
    public string $phone;
    public string $email;

    public function __construct(string $name, string $address, string $zipCode, string $phone, string $email) {
        $this->name = $name;
        $this->address = $address;
        $this->zipCode = $zipCode;
        $this->phone = $phone;
        $this->email =$email;
    }

    public function setProp(string $name, string $address, string $zipCode, string $phone, string $email): void {
        $this->name = $name;
        $this->address = $address;
        $this->zipCode = $zipCode;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function getProp(): array {
        return [
            'name' => $this->name,
            'address' => $this->address,
            'zipCode' => $this->zipCode,
            'phone' => $this->phone,
            'email' => $this->email
        ];
    }
}
