namespace AhorcadoTP2
{
    partial class Ahorcado
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.puntajes = new System.Windows.Forms.Button();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.palabraOculta = new System.Windows.Forms.TextBox();
            this.letra = new System.Windows.Forms.TextBox();
            this.Aceptar = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.SuspendLayout();
            // 
            // puntajes
            // 
            this.puntajes.Location = new System.Drawing.Point(116, 209);
            this.puntajes.Name = "puntajes";
            this.puntajes.Size = new System.Drawing.Size(137, 23);
            this.puntajes.TabIndex = 0;
            this.puntajes.Text = "Puntajes";
            this.puntajes.UseVisualStyleBackColor = true;
            // 
            // pictureBox1
            // 
            this.pictureBox1.Location = new System.Drawing.Point(247, 25);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(106, 142);
            this.pictureBox1.TabIndex = 1;
            this.pictureBox1.TabStop = false;
            // 
            // palabraOculta
            // 
            this.palabraOculta.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.palabraOculta.Location = new System.Drawing.Point(33, 67);
            this.palabraOculta.Multiline = true;
            this.palabraOculta.Name = "palabraOculta";
            this.palabraOculta.Size = new System.Drawing.Size(186, 48);
            this.palabraOculta.TabIndex = 2;
            // 
            // letra
            // 
            this.letra.Location = new System.Drawing.Point(33, 147);
            this.letra.Name = "letra";
            this.letra.Size = new System.Drawing.Size(100, 20);
            this.letra.TabIndex = 3;
            // 
            // Aceptar
            // 
            this.Aceptar.Location = new System.Drawing.Point(144, 144);
            this.Aceptar.Name = "Aceptar";
            this.Aceptar.Size = new System.Drawing.Size(75, 23);
            this.Aceptar.TabIndex = 4;
            this.Aceptar.Text = "Aceptar";
            this.Aceptar.UseVisualStyleBackColor = true;
            this.Aceptar.Click += new System.EventHandler(this.button1_Click);
            // 
            // Ahorcado
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(383, 262);
            this.Controls.Add(this.Aceptar);
            this.Controls.Add(this.letra);
            this.Controls.Add(this.palabraOculta);
            this.Controls.Add(this.pictureBox1);
            this.Controls.Add(this.puntajes);
            this.Name = "Ahorcado";
            this.Text = "Ahorcado";
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button puntajes;
        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.TextBox palabraOculta;
        private System.Windows.Forms.TextBox letra;
        private System.Windows.Forms.Button Aceptar;
    }
}

