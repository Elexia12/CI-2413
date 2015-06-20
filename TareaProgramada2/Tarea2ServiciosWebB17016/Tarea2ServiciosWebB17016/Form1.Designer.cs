namespace Tarea2ServiciosWebB17016
{
    partial class Entrada
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
            this.Saludar = new System.Windows.Forms.Button();
            this.Texto = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.Ultimo = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // Saludar
            // 
            this.Saludar.Location = new System.Drawing.Point(41, 95);
            this.Saludar.Name = "Saludar";
            this.Saludar.Size = new System.Drawing.Size(75, 23);
            this.Saludar.TabIndex = 0;
            this.Saludar.Text = "Saludar";
            this.Saludar.UseVisualStyleBackColor = true;
            this.Saludar.Click += new System.EventHandler(this.Saludar_Click);
            // 
            // Texto
            // 
            this.Texto.Location = new System.Drawing.Point(41, 69);
            this.Texto.Name = "Texto";
            this.Texto.Size = new System.Drawing.Size(183, 20);
            this.Texto.TabIndex = 1;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(38, 53);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(32, 13);
            this.label1.TabIndex = 2;
            this.label1.Text = "Hola:";
            // 
            // Ultimo
            // 
            this.Ultimo.Location = new System.Drawing.Point(149, 95);
            this.Ultimo.Name = "Ultimo";
            this.Ultimo.Size = new System.Drawing.Size(75, 23);
            this.Ultimo.TabIndex = 3;
            this.Ultimo.Text = "Último";
            this.Ultimo.UseVisualStyleBackColor = true;
            this.Ultimo.Click += new System.EventHandler(this.Ultimo_Click);
            // 
            // Entrada
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(270, 180);
            this.Controls.Add(this.Ultimo);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.Texto);
            this.Controls.Add(this.Saludar);
            this.Name = "Entrada";
            this.Text = "Hola Mundo";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button Saludar;
        private System.Windows.Forms.TextBox Texto;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button Ultimo;
    }
}

