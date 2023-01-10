var MyApp = {}
    MyApp.excelData = function (r) { 
        let col = r.data[0][2]
          let colDet = _.without(r.data[1],r.data[1][1])
          let Data = []
              _.each(colDet, function (v,i) { 
                    let Obj = {}
                    Obj.no_dok_inout = col.A
                    Obj.tgl_dok_inout = moment(col.AB,'DD-MM-YYYY').format('YYYYMMDD')
                    Obj.wk_inout = moment(col.AD,'DD-MM-YYYY').format('YYYYMMDDhmmss')
                    Obj.kd_tps = "BGD01"
                    Obj.kd_dok = 1
                    Obj.kd_timbun = "Codeco in"
                    Obj.kd_sar_angkut = 4
                    Obj.nm_angkut = col.K
                    Obj.no_voy_flight = col.N
                    Obj.call_sign = col.N.substring(0,2)
                    Obj.tg_tiba = moment(col.Z,'DD-MM-YYYY').format('YYYYMMDD')
                    Obj.no_bc11 = col.I
                    Obj.tgl_bc11 = moment(col.J,'DD-MM-YYYY').format('YYYYMMDD')
                    Obj.pel_muat = col.U
                    Obj.pel_transit = col.V
                    Obj.pel_bongkar = col.W
                    Obj.kode_kantor = col.F
                    Obj.no_bl_awb = v.J.replace('-','')
                    Obj.tgl_bl_awb = moment(v.K,'DD-MM-YYYY').format('YYYYMMDD')
                    Obj.no_master_bl_awb = v.H.replace('-','')
                    Obj.tgl_master_bl_awb = moment(v.I,'DD-MM-YYYY').format('YYYYMMDD')
                    Obj.id_consignee = v.M
                    Obj.consignee = v.N
                    Obj.bruto = v.AF
                    Obj.no_pos_bc11 = v.E+v.F+v.G
                    Obj.kd_kem = v.AC
                    Obj.jml_kem = v.AB
                    Obj.no_ijin_tps = "KM-004/KPC.03/2016"
                    Obj.tgl_ijin_tps = "20160209"
                    Obj.flag_transfer = 1
                    Data.push(Obj)
               })
            return Data
     }