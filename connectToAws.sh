echo Try connect to 127.0.0.1:8888
sudo chmod 400 bitnami-aws-464302590973.pem
ssh -N -L 8888:127.0.0.1:80 -i bitnami-aws-464302590973.pem bitnami@18.158.205.125
