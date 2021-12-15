CREATE DATABASE twistcode;

CREATE TABLE transaksi(
    id VARCHAR (5) NOT NULL,
    tanggal_order DATE NOT NULL,
    status_pelunasan VARCHAR (7) NOT NULL,
    tanggal_pembayaran DATE,
    PRIMARY KEY (id)
);

CREATE TABLE detail_transaksi(
    id VARCHAR (5) NOT NULL,
    id_transaksi VARCHAR (5) NOT NULL,
    harga INT NOT NULL,
    jumlah_barang INT NOT NULL,
    subtotal INT (20) NOT NULL,
    PRIMARY KEY (id)
);

<!-- ALTER TABLE 'transaksi' ADD INDEX KEY ('id'); -->

ALTER TABLE detail_transaksi ADD FOREIGN KEY (id_transaksi) REFERENCES transaksi(id);

INSERT INTO transaksi (id, tanggal_order, status_pelunasan, tanggal_pembayaran) VALUES ('T01', '2020-12-01', 'lunas', '2020-12-01'), ('T02', '2020-12-02', 'pending', '');

INSERT INTO detail_transaksi (id, id_transaksi, harga, jumlah_barang, subtotal) VALUES ('DT01', 'T01', '10000', '2', '20000'), ('DT02', 'T02', '10000', '2', '40000');

SELECT tanggal_order, status_pembayaran, tanggal_pembayaran, total, jumlah_barang
FROM transaksi
JOIN detail_transaksi ON transaksi.id = detail_transaksi.id_transaksi;